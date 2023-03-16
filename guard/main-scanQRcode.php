<?php
require_once "../connection.php";
include '../process/countData.php';
session_start();
if(empty($_SESSION['guard_id'])){
	header("location: ../index.php");
    exit;
 }

?>
<script>
        var childWindow = "";
    var newTabUrl="http://localhost/AttendanceTracking/guard/display.php";

    function openNewTab(){
        childWindow = window.open(newTabUrl);
    }

    function refreshExistingTab(){
        childWindow.location=newTabUrl;
    }
 
</script>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta http-equiv="refresh" content="10"> -->
    <title>NEUST Papaya Off-Campus</title>

    <link href="../css/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="../css/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="../css/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="../css/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../css/master.css" rel="stylesheet">
    <link href="../css/flagiconcss/flag-icon.min.css" rel="stylesheet">
    <script type="text/javascript" src="../js/instascan.min.js"></script>

    <script src="../js/jquery/jquery.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/offcampuslogo.png">

    <style>
        body {
            background-image: url('../assets/cover2.png');
            background-repeat: no-repeat;
            background-attachment: fixed;  
            background-size: cover;
        }
    </style>
</head>

<body >
    
    <div class="wrapper">
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong" 
                 style="background-image: url('../assets/cover2.png');
                        background-repeat: no-repeat;
                        background-attachment: fixed;   
                        background-size: cover;">
                        
                <div style="padding-top: 5px; padding-bottom: 5px; text-shadow: 5px; font-size: 30px;">
                    <img src="../assets/offcampuslogo.png" class="app-logo" height="60px" width="60px">
                </div>
                <div style="padding-top: 5px; padding-bottom: 5px;">
                    <h2><b>&nbsp;NEUST Papaya Off-Campus</b></h2>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">

                        <a href="#" data-toggle="modal" data-target="#guardLogin" type="button" class="btn btn-warning btn-sm">
                            <i class="fas fa-user"></i> &nbsp;<b><?php echo  $_SESSION['guard_name'];?></b>

                        </a>

                        <!-- start -->
                        <div id="guardLogin" class="modal fade" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">

                                    <form method="POST" action="../process/guardBack.php">    
                                        <div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
                                            <h3 class="modal-title"><font color="white"><i class="fa fa-user"></i>&nbsp;Guard</font></h3>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" name="password"  class="form-control" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>

                                        <div style="clear:both;"></div>
                                        <div class="modal-footer">
                                            <button name="guardBack" class="btn btn-warning"><b>Login</b></button>
					                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            </div>
                        <!-- end -->

                    </ul>
                </div>
            </nav>            <!-- end of navbar navigation -->
            <div class="content">
                <center>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-8 col-md-8 col-lg-4 mt-3">
                                <div class="card shadow">
                                <!-- <center> -->
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <h4><b><?php include 'date.php'; ?></b></h4>       
                                            </div>
                                            <div class="col-sm-2">
                                                <img src="../assets/clock.jpg" width="70" height="70" alt="">
                                            </div>
                                        </div>
                                        <!-- <div class="footer"><hr/></div> -->
                                    </div>
                                    <!-- </center> -->
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4 col-lg-2 mt-3">
                                <div class="card shadow">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <div class="detail">
                                                    <span class="number">
                                                    <h2>
                                                        <center><b><?php echo countArr('student'); ?></b><center>
                                                    </h2>
                                                    </span>
                                                </div>
                                                <i class="fas fa-users"></i><b>&nbsp;Total Students</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-4 col-md-4 col-lg-2 mt-3">
                                <div class="card shadow">
                                    <div class="content">
                                        <div class="row">
                                        <div class="col-sm-10">
                                                <div class="detail">
                                                    <span class="number">
                                                    <h2>
                                                        <center><b><?php echo countArr('visitor'); ?></b><center>
                                                    </h2>
                                                    </span>
                                                </div>
                                                <i class="fas fa-users"></i><b>&nbsp;Total Visitors</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4 col-lg-2 mt-3">
                                <div class="card shadow">
                                    <a href="#" type="button" data-toggle="modal" data-target="#viewFaculty">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <div class="detail">
                                                    <span class="number">
                                                    <h2>
                                                        <center><b><?php echo countArr('Staff'); ?></b><center>
                                                    </h2>
                                                    </span>
                                                </div>
                                                <i class="fas fa-users"></i><b>&nbsp;Total Staffs</b>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <?php include '../components/modal/totalFaculty-view.php';?>

                            <div class="col-sm-4 col-md-4 col-lg-2 mt-3">
                                <div class="card shadow">
                                    <a href="#" type="button" data-toggle="modal" data-target="#viewTeacher">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <div class="detail">
                                                    <span class="number">
                                                    <h2>
                                                        <center><b><?php echo countArr('Teacher'); ?></b><center>
                                                    </h2>
                                                    </span>
                                                </div>
                                                <i class="fas fa-users"></i><b>&nbsp;Total Teachers</b>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <?php include '../components/modal/totalTeacher-view.php';?>
                        </div>
                    </div>
                </div>
                        
                        
                   <div class='container-fluid'>    
    				<div class="row">
               
                        <center>
                            <div class="card card-outline card-primary shadow" style= width:90%
                            ;>
                                <div class="card-header" style="background-color: rgba(45, 40, 211, 1)">
                                    <div class="card-tools">
                                    <!-- <img src="../assets/qrlogo.png" class="img-thumbnail" height="60px" width="60px"> -->
                                    <br>
                            
                                        <h3> 
                                            <font color="white">
                                                <b><i class="fas fa-camera"></i>&nbsp;TAP HERE</b>
                                            </font>
                                        </h3>
                              
                                    </div>
                                </div>
                                <!-- style="background-image: url('../assets/cover1.png');
                                                                background-repeat: no-repeat;
                                                                background-attachment: fixed;   
                                                                background-size: 50%;" -->
                           
                              
                                    <div style="padding:10px; " id="divvideo">
                                        <video id="preview" width="70%" height=""; style="border-radius:50px;"></video>
                                     

                                    </div>
                      
                  
     
            </div>
                        
            </center>
            
                        
                    </div>
                </div>
            </div>
    
        <?php include('ScanQrDetails.php');?>
				<!-- End Code -->


      

    <script src="../js/jquery/jquery.min.js"></script>
    <script src="../js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../js/chartsjs/Chart.min.js"></script>
    <script src="../js/dashboard-charts.js"></script>
    <script src="../js/script.js"></script>

    <script>
        let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
        Instascan.Camera.getCameras().then(function(cameras){
            if(cameras.length > 0 ){
                scanner.start(cameras[0]);
            } else{
                alert('No cameras found');
            }

        }).catch(function(e) {
            console.error(e);
        });

        scanner.addListener('scan',function(c){
            
           setValueQr(c);
//            var audio = new Audio('audio_file.mp3');
// audio.play();
        });

        const setValueQr = async(code) => {
            const response = await fetch(`ProcessSanQr.php?qrcode=${code}`, {
                credentials: "same-origin",
                method: "GET",
            });

            let { message, status} = await response.json();
       

                // var newTabUrl ="http://AttendanceTracking/guard/display.php";
                // window.open(newTabUrl);
               

            if(status == 'success') {

                
                document.querySelector('#Id').value = message.Id;
                document.querySelector('#fname').value = message.fname;
                document.querySelector('#lname').value = message.lname;
                document.querySelector('#mname').value = message.mname;
                document.querySelector('#course').value = message.course;
             
                
                $('#scanQrDetailsModal').modal('show');

                setTimeout(() => {
                    $('#scanQrDetailsModal').modal('hide');
                }, 4000);
                
                // refreshExistingTab();
                // openNewTab();
                setTimeout( async() => {
                    window.location.reload();
                }, 2000);
           
              
            }else if(status == 'staff') {

                                        
                        document.querySelector('#sId').value = message.sId;
                        document.querySelector('#sfname').value = message.sfname;
                        document.querySelector('#slname').value = message.slname;
                        document.querySelector('#smname').value = message.smname;
                        document.querySelector('#position').value = message.position;


                        $('#scanQrDetailsModalStaff').modal('show');

                        setTimeout(() => {
                            $('#scanQrDetailsModalStaff').modal('hide');
                        }, 4000);

                        // refreshExistingTab();
                        // openNewTab();
                        setTimeout( async() => {
                            window.location.reload();
                        }, 2000);


                }else if(status == 'visitor') {

                
                document.querySelector('#vId').value = message.vId;

                document.querySelector('#facility').value = message.facility;


                $('#scanQrDetailsModalvisitor').modal('show');

                setTimeout(() => {
                    $('#scanQrDetailsModalvisitor').modal('hide');
                }, 4000);
                refreshExistingTab();
           
                setTimeout( async() => {
                    window.location.reload();
                }, 4000);

                    }else if(status == 'logout'){
                document.querySelector('#Ids').value = message.Id;
                  $('#scanQrDetailsModalclose').modal('show');

                setTimeout(() => {
                    $('#scanQrDetailsModalclose').modal('hide');
                }, 4000); 
                refreshExistingTab();
              
                setTimeout( async() => {
                    window.location.reload();
                }, 2000);
              
            }else if(status == 'vlogout'){
                document.querySelector('#vIds').value = message.vId;
                  $('#vscanQrDetailsModalclose').modal('show');

                setTimeout(() => {
                    $('#vscanQrDetailsModalclose').modal('hide');
                }, 4000); 
                refreshExistingTab();
              
                setTimeout( async() => {
                    window.location.reload();
                }, 2000);
              
            }else if(status == 'slogout'){
                document.querySelector('#sIds').value = message.sId;
                  $('#sscanQrDetailsModalclose').modal('show');

                setTimeout(() => {
                    $('#sscanQrDetailsModalclose').modal('hide');
                }, 4000); 
                refreshExistingTab();
              
                setTimeout( async() => {
                    window.location.reload();
                }, 2000);
              
            }else if(status == 'suspended'){
                document.querySelector('#msg').value = message;
                  $('#mscanQrDetailsModalclose').modal('show');

                setTimeout(() => {
                    $('#mscanQrDetailsModalclose').modal('hide');
                }, 4000); 
                refreshExistingTab();
              
                setTimeout( async() => {
                    window.location.reload();
                }, 2000);
              
            } else if(status= 'error') {
                // alert(message);
                // document.querySelector('#mssg').value = message;
                  $('#error').modal('show');

                setTimeout(() => {
                    $('#error').modal('hide');
                }, 4000); 
                refreshExistingTab();
              
                setTimeout( async() => {
                    window.location.reload();
                }, 2000);
            } else{
                alert(message);
            }
        }

     
    </script>

    <script type="text/javascript">
        var timestamp = '<?=time();?>';
        function updateTime(){
            $('#time').html(Date(timestamp));
            timestamp++;
        }
        $(function(){
            setInterval(updateTime, 1000);
        });
    </script>
</body>

</html>
