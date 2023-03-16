<html>
    <head>
        <!-- SweetAlert -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript" src="../js/sweetalert2/sweetalert2.js"></script>
        <link rel="stylesheet" href="../css/sweetalert2/sweetalert2.css">
    </head>
<body>

<?php
session_start();
require_once "../connection.php";

if (isset($_POST['guardBack']))
{   
    // $username = $_SESSION['username'];
	$g_password	= $_POST['password'];
    $guardId = $_SESSION['guard_id'];

 

	$sql = "SELECT * FROM tbl_user WHERE user_id ='$guardId'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
        
           
              if (password_verify($_POST['password'],$row['password']))
              {

                echo "<script>
                    Swal.fire({
                            position: 'top',
                            icon: 'success',
                            title: 'Login Successfully!',
                            showConfirmButton: false,
                            timer: 1000
                            });
                    </script>";

                echo "
                    <script>
                        setTimeout( async() => {
                            window.location='../guard/index.php';
                        }, 1000)
                    </script>";
                
              }
            else{
                echo "<script>
                    Swal.fire({
                            position: 'top',
                            icon: 'error',
                            title: 'Login Failed!',
                            showConfirmButton: false,
                            timer: 1000
                            });
                    </script>";

                echo "
                    <script>
                        setTimeout( async() => {
                            window.location='../guard/main-scanQRcode.php';
                        }, 1000)
                    </script>
                ";
            } 
        }
  ?>

</body>
</html>