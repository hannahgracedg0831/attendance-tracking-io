<?php  
session_start();
if(empty($_SESSION['admin_id'])){
	header("location: ../index.php");
    exit;
 }
 include '../components/admin-header.php'; 
 include '../process/countPending.php';?>			


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
				<li><a href="main-ReportStaff.php" style="background-color: #FFA600;"><font color="black"><strong><i class="fa fa-th-large"></i> <span> Staff</span></strong></font></a></li>
				<li><a href="main-ReportVisitor.php"><i class="fa fa-th-large"></i> <span> Visitor</span></a></li>
				<li><a href="main-pendingQR.php"><i class="fa fa-users"></i> <span> Pending&nbsp;<span class="badge badge-pill badge-danger">
				<?php 
							$student = countPend('student');
							$teacher = countPend('Teacher');
							$guard = countPend('Guard');
							$visitor = countPend('visitor');
							$total = $student + $teacher + $guard + $visitor;
							
	
							echo $total;
					?>
				</span></span></a></li>
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
								<h3 class="page-title">Staff</h3>
									<ul class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
										<li class="breadcrumb-item active">Staff</li>
									</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="alert alert-primary">

						<div class="dropdown btn-group" role="group" aria-label="Button group with nested dropdown">
							<div class="btn-group" role="group">
						  		<button class="btn btn-warning btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
						    		<font color="black"><b>Filter Data By:</b></font>
						  		</button>
						  			<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
						  				<small><center><font color="blue"><b>CHOOSE YOUR OPTION:</b></font></center></small>
									    <li><a class="dropdown-item" data-toggle="modal" data-target="#filterdataDate" type="button" href="#">
									    	<i class="fa fa-calendar"></i>&nbsp;Data by Date
									    <li><a class="dropdown-item" href="#"><i class="fa fa-clock-o"></i>&nbsp;Data by Time &raquo; </a>
								          	<ul class="dropdown-menu dropdown-submenu">
									            <li><a class="dropdown-item" data-toggle="modal" data-target="#timeIN" type="button"href="#">
									            	<i class="fa fa-clock-o"></i>&nbsp;Time IN</a></li>
									            <li><a class="dropdown-item" data-toggle="modal" data-target="#timeOUT" type="button"href="#">
									            	<i class="fa fa-clock-o"></i>&nbsp;Time OUT</a></li>
								          	</ul>
								        </li>
									</ul>
							</div>
						</div>

						<div class="pull-right">
							<a href="main-ReportStaff.php" class="btn btn-warning btn-sm">&nbsp;<font color="black"><b><i class="fa fa-refresh"></i>&nbsp;Refresh Table</b></font></a>
						</div>

						<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
						  <div class="btn-group" role="group">
						    <button id="btnGroupDrop1" type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						      <font color="black"><b>Export By:</b></font>
						    </button>
							<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
						    	<small><center><font color="blue"><b>CHOOSE YOUR OPTION:</b></font></center></small>
						      <a type="button" class="dropdown-item" data-toggle="modal" data-target="#staffcsv_modal" href="">CSV</a>
					      <!-- <a type="button" class="dropdown-item" href="#">PDF</a> -->
					    <!-- <a type="button" class="dropdown-item" href="../process/admin-exportEXCELReportstudent.php">EXCEL</a> -->
 						<a type="button" class="dropdown-item" data-toggle="modal" data-target="#staffprint_modal" href="">PRINT</a>
						    </div>
						  </div>
						</div>

						<!-- Filter Data Modal -->
						<?php include '../components/modal/filterdataDate.php'; ?>
						<!-- /Filter Data Modal -->

				    </div>



				<div class="row">				
					<div class="col-md-12">
					<div class="card shadow">
							<div class="card-body">
								<div class="card-box">
									<div class="table-responsive">

		<div id = "content">
			<?php include '../components/table/admin-tableReportStaff.php'; ?>
		</div>

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