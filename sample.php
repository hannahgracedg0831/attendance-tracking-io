
<?php
session_start();
$id=$_SESSION['guard_id']
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NEUST Papaya Off-Campus</title>
    <link href="css/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="css/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="css/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/master.css" rel="stylesheet">
    <link href="css/flagiconcss/flag-icon.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/offcampuslogo.png">

    <style>
        body {
            background-image: url('assets/cover.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;  
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong" 
                 style="background-image: url('assets/cover2.png');
                        background-repeat: no-repeat;
                        background-attachment: fixed;   
                        background-size: cover;">
                <div style="padding-top: 5px; padding-bottom: 5px; text-shadow: 5px; font-size: 30px;">
                    <img src="assets/offcampuslogo.png" class="app-logo" height="60px" width="60px">
                </div>
                <div style="padding-top: 5px; padding-bottom: 5px; font-size: 25px;">
                    <em><b>&nbsp;NEUST Papaya Off-Campus</b></em>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">

                        <a href="logout.php" type="button" class="btn btn-danger btn-sm" title="Logout">
                            <i class="fas fa-power-off"></i> &nbsp;Logout
                        </a>
                    </ul>
                </div>
            </nav>
            <!-- end of navbar navigation -->
            <div class="content">

                <div class="container-fluid">
<br/>


            <div class="row">
                <center>
                    <div class="col-lg-5">
                        <div class="card card-outline card-primary">
                        <div class="card-header" style="background-color: rgba(7, 4, 112, 1);">
                                <div class="card-tools">
                                <h6 class="mb-6 text-muted"><h3><font color="white"><i class="fa fa-user"></i>&nbsp;Change Account</font></h3></h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="process/newlogin-process.php" method="POST">
                                    <div class="mb-3 text-start">
                                        <center><input type="hidden" name='id' value='<?php echo $id?>' readonly=""></center>
                                    </div>
                                    <div class="mb-3 text-start">
                                            <input type="text" class="form-control" name="newusername" placeholder="New Username" required>
                                    </div>
                                    <div class="mb-3 text-start">
                                            <input type="password" class="form-control" minlength="5" name="newpassword" placeholder="New Password" required>
                                    </div>
                                    <div class="mb-3 text-start">
                                            <input type="password" class="form-control" minlength="5" name="renewpassword" placeholder="New Re-type Password" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-warning shadow-2 mb-4">Proceed</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
                        
                        
            
                        
                    </div>
                </div>
            </div>
        </div>


        <script src="js/jquery/jquery.min.js"></script>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/dashboard-charts.js"></script>
    <script src="js/script.js"></script>

</body>

</html>
