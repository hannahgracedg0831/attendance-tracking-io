<?php
 session_start();
 if(empty($_SESSION['guard_id'])){
	header("location: ../index.php");
    exit;
 }
 ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta http-equiv="refresh" content="2"> -->
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
    <script src="../js/jquery-3.5.1.min.js"></script>
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
                        
                <marquee>
                    <h3><b><font color="#FFA600"><br>
                        NEUST Off-Campus Program General Tinio (Papaya)
                    </font></b></h3>
                </marquee>
            </nav> 
                       <!-- end of navbar navigation -->
                       <?php
					$date = date('Y-m-d');
					$datelogs = file_get_contents('../jsonLogs/date-logs.json');
					$logsdate = json_decode($datelogs, true);
					// echo "das";	
					foreach ($logsdate as $key => $value) {
						foreach ($value as $k => $v) {
							if($v['date']==$date){
							
							require_once '../connection.php';

						date_default_timezone_set("Singapore");
						$data = file_get_contents('../jsonLogs/'.$date.'.json');
        				$Logs = json_decode($data, true);
                                // $name='';
                                // $course ='';
                                $id='';
						foreach ($Logs as $key => $value) {
							foreach ($value as $k => $v) {
									
							if($v['type']=='student'){
                                if(empty($v['TimeOut'])){
                                    
                              $id=$k;
                             } }
						}
					}
                    $sec="";
                    $course="";
                    $name="";
                    if(!empty($id)){
                        $sql ="SELECT * FROM tbl_student WHERE student_id='$id'";
                        $query = $con->query($sql);
                        $fetch = $query->fetch_assoc();
                        $sec = $fetch['year_section'];
                        $course = $fetch['course'];
                        $charat = substr($fetch['mname'], 0, 1);
                        $name= $fetch['lname'].', '.$fetch['fname'].' '.$charat.'.';
                    }
                    ?>
            <div class="content">
                <center>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow" style="height: 100%; width: 100%;">
                                <div class="card-header" style="background-color: rgba(45, 40, 211, 1)"></div>
                                <!-- <center> -->
                                    <div class="content">
                                        <center>
                                        <div class="col-md-12" >
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-6" style="margin-top: 40px;">
                                                        <img src="../assets/user2.png" width="80%" height="80%" class="img-thumbnail">
                                                    </div>
                                                    <div class="col" style='margin-top:6%;'>
                                                        <br>
              <?php
              if(!empty($name)){

              
              ?>
                     <div style='font-size:40px; margin-bottom: -20px;' >
                                <?php echo $name; ?>
                                        </div>
                                            <hr>
                                                <div style='margin-top: -17px; font-size:25px;'>
                                                <b>Name</b>
                                                </div>
                                                     <br>
                                        <div style='font-size:30px; margin-bottom: -20px;' >
                                       <?php
                                       echo $course.'-'.$sec; 
                                       ?>
                                        </div>
                                            <hr>
                                                <div style='margin-top: -17px; font-size:25px;'>
                                                <b>Section</b>
                                                </div>
                                              
                                                         <br>
                                                         <div style='font-size:30px; margin-bottom: -20px;' >
                                         <?php
                                         echo $v['TimeIn'];
                                         ?>
                                        </div>
                                            <hr>
                                                <div style='margin-top: -17px; font-size:25px;'>
                                                <b>Time IN</b>
                                                </div>
                  
			<?php	}
            else{  ?>
               <div style='font-size:40px; margin-bottom: -20px;' >
               <br>
                        </div>
                            <hr>
                                <div style='margin-top: -17px; font-size:25px;'>
                                <b>Name</b>
                                </div>
                                     <br>
                        <div style='font-size:30px; margin-bottom: -20px;' >
               <br>
                 
                        </div>
                            <hr>
                                <div style='margin-top: -17px; font-size:25px;'>
                                <b>Section</b>
                                </div>
                              
                                         <br>
                                         <div style='font-size:30px; margin-bottom: -20px;' >
                        <br>
                        </div>
                            <hr>
                                <div style='margin-top: -17px; font-size:25px;'>
                                     <b>Time IN</b>
                                </div>
  

       <?php     }
                            }
			}
		}
	?>
                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </center>
                                        <!-- <div class="footer"><hr/></div> -->
                                    </div>
                                    <!-- </center> -->
                            </div>
                        </div>
                    </div>
                </div>
                </center>
            </div>
                        
                        
            <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-3">
    <!-- Section: Social media -->
    <section class="mb-5">

    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col">
            <img src="../assets/neustlogo.png" height="80px" width="80px">
          </div>
          <!--Grid column-->
                                
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong><h2 style="color: #FFA600;">Nueva Ecija University of Science and Technology Papaya Off-Campus</h2></strong>
            </p>
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col">
            <img src="../assets/offcampuslogo.png" height="80px" width="80px">
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

   <hr>
  </div>
  <!-- Grid container -->
</footer>
<!-- Footer -->  
                        
                    </div>
                </div>
            </div>
        </div>
				<!-- End Code -->


                </div>
            </div>
        </div>
    </div>
    
</body>
    <script>
        let today = new Date().toISOString().slice(0, 10);
        let jsons = "../jsonLogs/"+today+".json";

        var previous = null;
        var current = null;

        setInterval(function() {
            $.getJSON(jsons, function(json) {
                current = JSON.stringify(json);
                if (previous && current && previous !== current) {
                    window.location.reload();
                }
                previous = current;
            });                       
        }, 2000);
    </script>
</html>
