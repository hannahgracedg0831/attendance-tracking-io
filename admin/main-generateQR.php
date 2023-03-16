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
				<li><a href="main-generateQR.php" style="background-color: #FFA600;"><font color="black"><strong><i class="fa fa-qrcode"></i> <span> QR-Code</span></strong></font></a></li>
		
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
								<h3 class="page-title">Generate QR-Code</h3>
									<ul class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
										<li class="breadcrumb-item active">Generate QR-Code</li>
									</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

                    <div class="alert alert-primary">
                        <a href="#" data-target="#generateQR" data-toggle="modal" class="btn btn-warning btn-sm">&nbsp;<font color="black"><b><i class="fa fa-qrcode"></i>&nbsp;Generate</b></font></a>
                    </div>
					

				<!-- Start Code -->
				<div class="row">				
					<div class="col-md-7">
						<div class="card shadow">
							<div class="card-body">
								<div class="card-box">
									<div class="table-responsive">
								        <div id = "content">
									        <?php include '../components/table/admin-tableGenerate.php'; ?>
								        </div>
									</div>
									<?php include '../components/modal/admin-generateQR.php'; ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="card shadow">
							<div class="card-body">
								
							<form method="POST" action="../process/add-facultystaff.php" autocomplete="off">  
							<div style="margin-right:15%">
							<img src="../assets/visit.png" width="120%" height="170%"/>  
							</div>
							
									<div class="modal-body">
								
										<div class="col-md-12">
										<center>
											<label><u>ID: </u></label>
										<br>
										<br>
										</center>

										<center>
										<div class="form-group">
											<hr><label>Name</label>
										</div>
										<br>
										<div class="form-group">
											<hr><label>Contact</label>
										</div>
										<br>
										<div class="form-group">
											<hr><label>Address</label>
										</div>
										</center>

										<br>
										<br>
										<div class="row">
											<div class="col" style="">
											</div>
											<div class="col" style="">
												<hr><label>Facilitator Signature</label>
											</div>
										</div>
										
									
									<!-- <div style="clear:both;"></div>
									<div class="modal-footer">
										<button name="" class="btn btn-warning">Print</button>
										<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									</div> -->
									</div>
								</div>
							</form>
								<!-- <center>
									<h3>Preview</h3>
									<div class="card-box">
										<img src="../assets/neust.png" class="img-thumbnail" alt="">
									</div>
								</center> -->
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