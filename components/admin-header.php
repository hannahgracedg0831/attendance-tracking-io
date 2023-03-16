<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>NEUST Papaya Off-Campus</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="../assets/offcampuslogo.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="../css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
		<link rel="stylesheet" href="../css/line-awesome.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="../css/select2.min.css">

		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="../css/bootstrap-datetimepicker.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="../css/style.css">

		<!-- Scanner -->
		<script type="text/javascript" src="../js/instascan.min.js"></script>
		<script type="text/javascript" src="../js/script.js"></script>


		<!-- DataTable -->
		<link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.css" />

		<style type="text/css">
			.dropdown-menu li {
			  position: relative;
			}
			.dropdown-menu .dropdown-submenu {
			  display: none;
			  position: absolute;
			  left: 100%;
			  top: -7px;
			}
			.dropdown-menu .dropdown-submenu-left {
			  right: 100%;
			  left: auto;
			}
			.dropdown-menu > li:hover > .dropdown-submenu {
			  display: block;
			}
		</style>

		
    </head>
    <body style="background-color: rgba(197,154,177,0.14);">
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header shadow-5-strong" style="background-image: url('../assets/cover2.png');
                        background-repeat: no-repeat;
                        background-attachment: fixed;   
                        background-size: cover;">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="index.php" class="logo">
						<img src="../assets/offcampuslogo.png" width="60" height="60" alt="">
					</a>
                </div>
				<!-- /Logo -->
				
				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				
				<!-- Header Title -->
                <div class="page-title-box">
					<h2><b><font color="white">NEUST Papaya Off-Campus</font></b></h2>
                </div>
				<!-- /Header Title -->
				
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
				
				<!-- Header Menu -->
				<ul class="nav user-menu">
	
					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="../assets/user.jpg" class="img-circle" alt="">
							<span class="status online"></span></span>
							<span><?php echo  $_SESSION['admin_name']; ?></span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="../admin/main-account.php"><i class="fa fa-user"></i> Account Setting</a>
							<a class="dropdown-item" href="../admin/admin-logout.php"><i class="fa fa-sign-out"></i> Logout</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->
				
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="../admin/main-account.php">Account Setting</a>
						<a class="dropdown-item" href="../admin/admin-logout.php">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>
			<!-- /Header -->
			