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
				<li><a href="main-pendingQR.php"><i class="fa fa-users"></i> <span> Manage Pending&nbsp;<span class="badge badge-pill badge-danger">
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
				<!-- <li><a href="main-visitors.php" style="background-color: #FFA600;"><font color="black"><strong><i class="fa fa-list"></i> <span> Manage Visitor</span></strong></font></a></li> -->
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
								<h3 class="page-title">Visitor</h3>
									<ul class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
										<li class="breadcrumb-item active">Visitor</li>
									</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="alert alert-primary">
						<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
							<div class="btn-group" role="group">
							<button id="btnGroupDrop1" type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<font color="black"><b>Export By:</b></font>
							</button>
							<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
								<small><center><font color="blue"><b>CHOOSE YOUR OPTION:</b></font></center></small>
								<a type="button" class="dropdown-item" href="../process/admin-export-visitor.php">CSV</a>
<!-- 							      <a type="button" class="dropdown-item" href="#">PDF</a>
-->							      <a type="button" class="dropdown-item" href="../process/admin-exportExcel-visitor.php">EXCEL</a>
							      <a type="button" class="dropdown-item" href="../process/printVisitor.php">PRINT</a>
							    </div>
							</div>
						</div>
				    </div>

				<!-- Start Code -->
				<div class="row">				
					<div class="col-md-12">
					<div class="card shadow">
							<div class="card-body">
								<div class="card-box">
									<div class="table-responsive">

		<div id = "content">
			<?php include '../components/table/admin-tableVisitor.php'; ?>
		</div>

			<?php include '../components/modal/admin-deleteVisitor.php'; ?>

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