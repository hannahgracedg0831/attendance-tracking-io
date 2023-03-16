<?php
session_start();
if(empty($_SESSION['admin_id'])){
	header("location: ../index.php");
    exit;
 }
 include '../components/admin-header.php'; 
 include '../process/countPending.php';

 ?>


<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
			<!-- Dashboard -->
			<li class="menu-title">
					<span>Main</span>
				</li>
				<li><a href="index.php"><i class="fa fa-laptop"></i> <span>Dashboard</span></a></li>
		<hr>
			<!-- Generate -->
			<li class="menu-title">
					<span>Generate</span>
				</li>
				<li><a href="main-generateQR.php"><i class="fa fa-qrcode"></i> <span> QR-Code</span></a></li>
		
		<hr>
			<!-- Report -->
			<li class="menu-title">
					<span>Report</span>
				</li>
				<li><a href="main-ReportStudent.php"><i class="fa fa-th-large"></i> <span> Student</span></a></li>
				<li><a href="main-ReportStaff.php"><i class="fa fa-th-large"></i> <span> Staff</span></a></li>
				<li><a href="main-ReportVisitor.php"><i class="fa fa-th-large"></i> <span> Visitor</span></a></li>
				<li><a href="main-pendingQR.php"><i class="fa fa-users"></i> <span> Pending&nbsp;<span class="badge badge-pill badge-danger">
				<?php 
						$student = countPend('student');
						$teacher = countPend('teacher');
						// $visitor = countPend('visitor');
						$total = $student + $teacher;

						echo $total;
					?></span></span></a></li>
		<hr>
			<!-- Report -->
			<li class="menu-title">
					<span>List</span>
				</li>
				<li><a href="main-students.php"><i class="fa fa-list"></i> <span> Manage Student</span></a></li>
				<li><a href="main-facultystaff.php"><i class="fa fa-list"></i> <span> Manage Staff</span></a></li>
				<!-- <li><a href="main-visitors.php"><i class="fa fa-list"></i> <span> Manage Visitor</span></a></li> -->
				<li><a href="main-staffAccount.php"><i class="fa fa-users"></i> <span> Manage Staff Account</span></a></li>
				
		<hr>
			<!-- Report -->
			<li class="menu-title">
					<span>Database</span>
				</li>
				<li><a href="main-backupRestore.php"><i class="fa fa-database"></i> <span> Backup and Restore</span></a></li>
			</ul>
		</div>
	</div>
</div>
<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Account Setting</h3>
									<ul class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
										<li class="breadcrumb-item active">Account Setting</li>
									</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

				<!-- Start Code -->
				<!-- SELECT PROFILE -->
			<?php 	include('../connection.php');
            
				$select_sql = "SELECT * FROM tbl_staff WHERE Position = 'Admin'";
				$select_result = mysqli_query($con, $select_sql);
				if (mysqli_num_rows($select_result) > 0) {
					while ($select_row = mysqli_fetch_assoc($select_result)) 
					{
					$staffId = $select_row['staff_id'];
					$first = $select_row['fname'];
					$middle = $select_row['mname'];
					$last = $select_row['lname'];
					$contact = $select_row['contact'];
					$email = $select_row['email'];
					$barangay = $select_row['barangay'];
					$city = $select_row['city'];
					$province = $select_row['province'];
					$photo = $select_row['photo'];

					$name = $first . ' ' . $middle . '. ' . $last;
					$address = $barangay . ', ' . $city . '. ' . $province;
					}
				}
			?>

				<div class="card mb-0 shadow">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="profile-view">
									<div class="profile-img-wrap">
									<div class="profile-img">
											<a href="#"><img src='<?php 
																	$default="../assets/user.jpg"; 
																	if(file_exists($photo)){ 
																		echo $photo; 
																	}else{ 
																		echo $default; } ?>' class='img-thumbnail'/></a>
										</div>
									</div>
									<div class="profile-basic">
										<div class="row">
											<div class="col-md-5">
												<div class="profile-info-left">
													<br/>
													<h3 class="user-name m-t-0 mb-0">
													<?php echo  $_SESSION['admin_name']; ?>
													</h3>
													<h6 class="text-muted">Administrator</h6>
												</div>
											</div>
											<div class="col-md-7">
												<ul class="personal-info">
													<li>
														<div class="title">Account Type:</div>
														<div class="text">Admin</div>
													</li>
													<li>
														<div class="title">Phone:</div>
														<div class="text"><?php echo $contact; ?></div>
													</li>
													<li>
														<div class="title">Email:</div>
														<div class="text"><?php echo $email; ?></div>
													</li>
												</ul>
											</div>
										</div>
										<br>
									</div>
									<div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br>
				
				
					<!-- Password Info Tab -->
					<div id="emp_profile" class="pro-overview tab-pane fade show active">
						<div class="row">
							<div class="col-md-8 d-flex shadow">
								<div class="card profile-box flex-fill">
									<div class="card-body">
										<h3 class="card-title">Change Password</h3>
										<ul class="personal-info">
										<form method="POST" action="../process/admin-changePassword.php">
											<div class="form-group">
												<label>Old password</label>
												<input type="password" name="currentPass" minlength="5" placeholder="********" class="form-control">
											</div>
											<div class="form-group">
												<label>New password</label>
												<input type="password" name="newPass" minlength="5" placeholder="********" class="form-control">
											</div>
											<div class="form-group">
												<label>Confirm password</label>
												<input type="password" name="confirmPass" minlength="5" placeholder="********" class="form-control">
											</div>
											<div class="submit-section">
												<button class="btn btn-primary submit-btn" name="changePass">Update Password</button>
											</div>
										</form>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Password Info Tab -->
	
			</div>
			<!-- /Page Content -->
			
			<!-- Profile Modal -->
			<?php include '../components/modal/admin-updateAccount.php'; ?>
			<!-- /Profile Modal -->
				<!-- End Code -->


				</div>
				<!-- /Page Content -->
            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
	
		<?php include '../components/footer.php'; ?>
		
    </body>
</html>