<?php


 session_start();
 if(empty($_SESSION['guard_id'])){
	header("location: ../index.php");
    exit;
 }
include '../components/guard-header.php';
include '../process/countData.php';
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
				<li><a href="index.php" style="background-color: #FFA600;"><font color="black"><strong><i class="fa fa-laptop"></i> <span>Dashboard</span></strong></font></a></li>
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
				<li><a href="main-ReportStudent.php"><i class="fa fa-th-large"></i> <span> Student</span></a></li>
				<li><a href="main-ReportStaff.php"><i class="fa fa-th-large"></i> <span> Staff</span></a></li>
				<li><a href="main-ReportVisitor.php"><i class="fa fa-th-large"></i> <span> Visitor</span></a></li>
				<li><a href='' onclick="myFunction()"><i class="fa fa-desktop"></i> <span> Monitor</span></a></li>
				
				<!-- <li><a href="main-Reportpending.php"><i class="fa fa-th-large"></i> <span>Pending</span></a></li> -->
				
			</ul>
		</div>
	</div>
</div>
<script>
function myFunction() {
  var myWindow = window.open("display.php", "", "width=1300,height=800");
}
</script>
<!-- /Sidebar -->

			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-md-12 page-header">
								<div class="page-pretitle">Main</div>
								<h2 class="page"><i class="fa fa-laptop"></i></a>&nbsp;Dashboard</h2>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

				<!-- Start Code -->
				<div class="row">
					<div class="col-md-4 col-sm-4 col-lg-4 col-xl-4">
						<div class="card shadow">
							<a href="main-ReportStudent.php">
							<h5 class="card-header" style="background-color: rgba(7, 4, 112, 1);">
								<font color="#FFA600"><b><h4>Total Students</h4></b></font>
							</h5>
							<div class="card-body">
								<div class="row" style="color: black; font-size: 20px;">
									<div class="col-8"><i class="fa fa-users fa-2x"></i></div> 
									<div class="col"><h2><?php echo countArr('student'); ?></h2></div>
								</div><hr>
							</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-lg-4 col-xl-4">
						<div class="card shadow">
							<a href="main-ReportStaff.php">
							<h5 class="card-header" style="background-color: rgba(7, 4, 112, 1);">
								<font color="#FFA600"><b><h4>Total Teachers</h4></b></font>
							</h5>
							<div class="card-body">
								<div class="row" style="color: black; font-size: 20px;">
									<div class="col-8"><i class="fa fa-users fa-2x"></i></div> 
									<div class="col"><h2><?php echo countArr('teacher'); ?></h2></div>
								</div><hr>
							</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-lg-4 col-xl-4">
						<div class="card shadow">
							<a href="main-ReportVisitor.php">
							<h5 class="card-header" style="background-color: rgba(7, 4, 112, 1);">
								<font color="#FFA600"><b><h4>Total Visitors</h4></b></font>
							</h5>
							<div class="card-body">
								<div class="row" style="color: black; font-size: 20px;">
									<div class="col-8"><i class="fa fa-users fa-2x"></i></div> 
									<div class="col"><h2><?php echo countArr('visitor'); ?></h2></div>
								</div><hr>
							</div>
							</a>
						</div>
					</div>
				</div>
				<div class="row"></div>
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