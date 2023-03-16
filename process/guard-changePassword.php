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
include_once('../connection.php');

$oldPass = $_POST["currentPass"];
$newPass = $_POST["newPass"];
$renewPass = $_POST["confirmPass"];

if (count($_POST) > 0) 
{
    $result = mysqli_query($con,"SELECT * From tbl_user WHERE user_id='".$_SESSION["guard_id"]."'");
    $row = mysqli_fetch_array($result);

    // $hash = password_verify($password,$row["u_password"]);

    if(password_verify($oldPass,$row['password'])) 
    {
        if($newPass == $renewPass){
            mysqli_query($con,"UPDATE tbl_user Set password='" . password_hash($newPass,PASSWORD_DEFAULT) . "' WHERE user_id='" . $_SESSION["guard_id"] . "'");

                    echo "<script>
                        Swal.fire({
                                position: 'top',
                                icon: 'success',
                                title: 'Successfully Password Changed!',
                                showConfirmButton: false,
                                timer: 1000
                                });
                        </script>";

                    echo "
                        <script>
                            setTimeout( async() => {
                                window.location='../guard/main-account.php';
                            }, 1000)
                        </script>
                    ";
        }
        } else {
            echo "<script>
            Swal.fire({
                    position: 'top',
                    icon: 'error',
                    title: 'Password is not match!',
                    showConfirmButton: false,
                    timer: 1000
                    });
            </script>";

        echo "
            <script>
                setTimeout( async() => {
                    window.location='../guard/main-account.php';
                }, 1000)
            </script>
        ";
        }
        
        
    } else {
        echo "<script>
            Swal.fire({
                    position: 'top',
                    icon: 'error',
                    title: 'Current Password is not correct!',
                    showConfirmButton: false,
                    timer: 1000
                    });
            </script>";

        echo "
            <script>
                setTimeout( async() => {
                    window.location='../guard/main-account.php';
                }, 1000)
            </script>
        ";
        
    }
?>

</body>
</html>