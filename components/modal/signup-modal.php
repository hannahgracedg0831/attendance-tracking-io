<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	font-family: 'Varela Round', sans-serif;
}
/* Login CSS */
.modal-signup {
	color: #636363;
	width: auto;
}
.modal-signup .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-signup .modal-header {
	border-bottom: none;
	position: relative;
	justify-content: left;
}
.modal-signup h3 {
	text-align: center;
	font-size: 45px;
    color: #FFA600;
    font-weight: bold;
    padding-top: 3px;
}
.modal-signup  .form-group {
	position: relative;
}
/* .modal-signup i {
	position: absolute;
	left: 13px;
	top: 11px;
	font-size: 10px;
} */
/* .modal-signup .form-control {
	padding-left: 40px;
} */
.modal-signup .form-control:focus {
	border-color: #00ce81;
}
.modal-signup .form-control, .modal-signup .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-signup .hint-text {
	text-align: center;
	padding-top: 10px;
}
.modal-signup .close {
	position: absolute;
	top: -5px;
	right: -5px;
}
.modal-signup .btn, .modal-signup .btn:active {	
	border: none;
	background: #00ce81 !important;
	line-height: normal;
}
.modal-signup .btn:hover, .modal-signup .btn:focus {
	background: #00bf78 !important;
}
.modal-signup .modal-footer {
	background: #ecf0f1;
	border-color: #dee4e7;
	text-align: center;
	margin: 0 -20px -20px;
	border-radius: 5px;
	font-size: 13px;
	justify-content: center;
}
.modal-signup .modal-footer a {
	color: #999;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
/*.requiredInput {color: #FF0000;}*/
</style>
</head>
<body>

<!-- Start Signup -->
<div id="signup" class="modal fade">
	<div class="modal-dialog modal-dialog-centered modal-signup modal-lg" role="document">
		<div class="modal-content">
            <div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
                <img src="assets/offcampuslogo.png" height="70px" width="70px">
				<h3 class="modal-title">&nbsp;NEUST</h3>
			</div>
			<div class="modal-body">
				<form action="process/signup-process.php" method="POST" autocomplete="off">
                    <div class="col-md-12">
                        <div class="row">
                            <!-- Fullname -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fname" placeholder="Firstname" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="mname" placeholder="Middlename" required="required">					
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lname" placeholder="Lastname" required="required">					
                                </div>
                            </div>
                            <!-- Address -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="barangay" placeholder="Barangay" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="city" placeholder="City/Municipality" required="required">					
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="province" placeholder="Province" required="required">					
                                </div>
                            </div>
                            <!-- Email / Mobile -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" minlength="11" maxlength="11" onkeypress="return /[0-9]/i.test(event.key)" class="form-control" name="contact" placeholder="Mobile #" required="required">					
                                </div>
                            </div>
                            <!-- DOB / Gender -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="dob" placeholder="Date of Birth" required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="sex" required>
                                        <option selected disabled value="" required>&larr; Select Gender &rarr;</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>					
                                </div>
                            </div>


                                <div class="form-group">
                                    <input type="submit" name="signup" class="btn btn-primary btn-block btn-lg" value="Signup">
                                </div>
                        </div>
                    </div>
				</form>
			</div>
			<div class="modal-footer">
				<!-- <small><a href="#">.....</a></small> -->
				<!-- <a type="button" href="#" data-bs-toggle="modal" data-bs-target="#signup">Signup here </a> -->
			</div>
		</div>
	</div>
</div>
<!-- End Signup -->
</body>
</html>