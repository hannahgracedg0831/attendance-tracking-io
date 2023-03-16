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

    <link href="login.css" rel="stylesheet">


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/offcampuslogo.png">

    <style>
        #back {
          width: 100%;
          height: auto;
          background: url("assets/Back.jpg") center center;
          background-size: cover;
          position: relative;
        }
        #back .container {
          padding-top: 80px;
        }
        #back:before {
          content: "";
          background: rgba(0, 0, 0, 0.6);
          position: absolute;
          bottom: 0;
          top: 0;
          left: 0;
          right: 0;
        }
        #back h1 {
          margin: 0 0 10px 0;
          font-size: 45px;
          font-weight: 700;
          line-height: 56px;
          color: #FFA600;
        }
        #back h2 {
          margin: 0 0 10px 0;
          font-size: 30px;
          font-weight: 700;
          line-height: 56px;
          padding-top: 8px;
          padding-bottom: 2px;
          color: #FFA600;
        }
        #back .btn-get-started {
          font-family: "Poppins", sans-serif;
          text-transform: uppercase;
          font-weight: 500;
          font-size: 14px;
          letter-spacing: 1px;
          display: inline-block;
          padding: 8px 28px;
          border-radius: 50px;
          transition: 0.5s;
          margin: 10px;
          border: 2px solid #fff;
          color: #fff;
          font-weight: bold;
        }
        #back .btn-get-started:hover {
          background: #FFA600;
          border: 2px solid #FFA600;
          color: black;
          font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="wrapper"  id="back">
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg">
                        
                <div style="padding-top: 5px; padding-bottom: 5px; text-shadow: 5px; font-size: 30px;">
                    <img src="assets/offcampuslogo.png" class="app-logo" height="90px" width="90px">
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">

                        <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-warning btn-sm" title="Login">
                            <i class="fas fa-power-off"></i> &nbsp;<b>Login</b>
                        </a>

                    </ul>
                </div>
            </nav>

     <?php include 'modal/login-modal.php'; ?>
