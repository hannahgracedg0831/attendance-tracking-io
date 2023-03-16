<?php
session_start();
if(empty($_SESSION['admin_id'])){
	header("location: ../index.php");
    exit;
 }
include '../components/admin-header.php';
require_once '../connection.php';
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
				<li><a href="main-backupRestore.php" style="background-color: #FFA600;"><font color="black"><strong><i class="fa fa-database"></i> <span> Backup and Restore</span></strong></font></a></li>
				
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
								<h3 class="page-title">Backup and Restore</h3>
									<ul class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
										<li class="breadcrumb-item active">Backup and Restore</li>
									</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

                    <div class="alert alert-primary">
						<a href="backup-database.php" class="btn btn-warning btn-sm">&nbsp;<font color="black"><b><i class="fa fa"></i>&nbsp;Backup Database</b></font></a>
						<!-- <a href="restore.php" class="btn btn-warning btn-sm">&nbsp;<font color="black"><b><i class="fa fa"></i>&nbsp;Backup Database</b></font></a> -->
				    </div>

				<!-- Start Code -->
				<div class="row">				
					<div class="col-md-12">
                        <div class="card shadow">
                        <!-- <div class="card-header" style="background-color: lightgrey; font-size: 20px">Database File</div> -->
                            <div class="card-body">
                                <div class="card-box">
								<div class="table-responsive">
								<table id = "table" class="table table-bordered">
				<thead>
					<tr>
						<!-- <th class="text-center">
							<input type="checkbox" id="selectAll" onchange="checkAll(this)">&nbsp;Select All
						</th> -->
						<th class="text-center">Backup Data</th>
						<th class="text-center">Date</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require_once '../connection.php';

						$result =  mysqli_query($con,"SELECT * FROM backup_data");
							while($row = mysqli_fetch_array($result)) {
							$file_path = 'upload/';
                    ?>
                        
						<tr>
							<td class="text-center"><?php echo $row["name"];?></td>
    						<td class="text-center"><?php echo $row["date"];?></td>
							<?php 
								$name="attendancetrackingdb-".$row['date'].".sql"; 
							?>
							<td class="text-center">
								<div class="row">
									<div class="col">
										<a class="btn btn-warning" href="restore.php?restore=<?php echo $name ?>">restore</a>
										<a class="btn btn-danger" data-toggle="modal" data-target="#delete_modal<?php echo $row['id']?>"><i class="fa fa-trash-o"></i></a>
									</div>
								</div>	
								
							</td>
						</tr>
						<?php include '../components/modal/admin-deleteBackup.php'; ?>


					<?php  }  ?>

				</tbody>
			</table>
		
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
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