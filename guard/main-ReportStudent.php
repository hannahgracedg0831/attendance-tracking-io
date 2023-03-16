<?php
session_start();
if(empty($_SESSION['guard_id'])){
	header("location: ../index.php");
    exit;
 }
 include '../components/guard-header.php'; ?>			

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
			<!-- Monitoring -->
			<li class="menu-title">
					<span>Monitoring</span>
				</li>
				<li><a href="main-scanQRcode.php"><i class="fa fa-qrcode"></i> <span> Scan QR-Code</span></a></li>
		<hr>
			<!-- Report -->
			<li class="menu-title">
					<span>Report</span>
				</li>
				<li><a href="main-ReportStudent.php" style="background-color: #FFA600;"><font color="black"><strong><i class="fa fa-th-large"></i> <span> Student</span></strong></font></a></li>
				<li><a href="main-ReportStaff.php"><i class="fa fa-th-large"></i> <span> Staff</span></a></li>
				<li><a href="main-ReportVisitor.php"><i class="fa fa-th-large"></i> <span> Visitor</span></a></li>
				<li><a href="display.php" target="_blank"><i class="fa fa-desktop"></i> <span> Monitor</span></a></li>

				
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
								<h3 class="page-title">Student</h3>
									<ul class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
										<li class="breadcrumb-item active">Student</li>
									</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

				<div class="row">				
					<div class="col-md-12">
					<div class="card shadow">
							<div class="card-body">
								<div class="card-box">
									<div class="table-responsive">

		<div id = "content">
			<!-- Content Starts -->
			<div class="card shadow">
				<div class="card-body">
					<ul class="nav nav-tabs nav-tabs-bottom">
						<li class="nav-item">
							<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All</a></li>
						<li class="nav-item">
							<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Tap IN</a></li>
						<li class="nav-item">
							<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Tap OUT</a></li>
					</ul>
				</div>
			</div>
				<!-- Content End -->
				<hr>
			<?php include '../components/table/guard-tableReportStudent.php'; ?>
		</div>

									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
				<!-- End Code -->


				</div>
			</div>

				</div>
				<!-- /Page Content -->
            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<?php include '../components/footer.php'; ?>
		
    </body>
</html>