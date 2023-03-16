<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round"> -->
<link rel="stylesheet" href="css/login/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="js/login/jquery-3.5.1.min.js"></script>
<script src="js/login/popper.min.js"></script>
<script src="js/login/bootstrap.min.js"></script>
<style>
body {
	font-family: 'Varela Round', sans-serif;
}
/* Login CSS */
.modal-login {
	color: #636363;
	width: auto;
}
.modal-login .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-login .modal-header {
	border-bottom: none;
	position: relative;
	justify-content: left;
}
.modal-login h3 {
	text-align: center;
	font-size: 45px;
    color: #FFA600;
    font-weight: bold;
    padding-top: 3px;
}
.modal-login  .form-group {
	position: relative;
}
.modal-login i {
	position: absolute;
	left: 13px;
	top: 11px;
	font-size: 18px;
}
.modal-login .form-control {
	padding-left: 40px;
}
.modal-login .form-control:focus {
	border-color: #00ce81;
}
.modal-login .form-control, .modal-login .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-login .hint-text {
	text-align: center;
	padding-top: 10px;
}
.modal-login .close {
	position: absolute;
	top: -5px;
	right: -5px;
}
.modal-login .btn, .modal-login .btn:active {	
	border: none;
	background: #00ce81 !important;
	line-height: normal;
}
.modal-login .btn:hover, .modal-login .btn:focus {
	background: #00bf78 !important;
}
.modal-login .modal-footer {
	background: #ecf0f1;
	border-color: #dee4e7;
	text-align: center;
	margin: 0 -20px -20px;
	border-radius: 5px;
	font-size: 13px;
	justify-content: center;
}
.modal-login .modal-footer a {
	color: #999;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style>
</head>
<body>

<!-- Start Login -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-dialog-centered modal-login" role="document">
		<div class="modal-content">
			<div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
                <img src="assets/offcampuslogo.png" height="70px" width="70px">
				<h3 class="modal-title">&nbsp;NEUST</h3>
			</div>
			<div class="modal-body">
				<form action="process/login-process.php" method="POST" autocomplete="off">
					<div class="form-group">
						<i class="fa fa-user"></i>
						<input type="text" class="form-control" name="username" placeholder="Username" required="required">
					</div>
					<div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">					
					</div>
					<div class="form-group">
						<input type="submit" name="login" class="btn btn-primary btn-block btn-lg" value="Login">
					</div>
				</form>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
<!-- End Login -->

</body>
</html>