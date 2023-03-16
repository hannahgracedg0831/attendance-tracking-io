<html>
    <head>
        <!-- SweetAlert -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript" src="../js/sweetalert2/sweetalert2.js"></script>
        <link rel="stylesheet" href="../css/sweetalert2/sweetalert2.css">
    </head>
<body>

<!-- UPDATE PROFILE	-->
<?php include_once('../connection.php');

session_start();

if (isset($_POST["update_data"])) {
    
    $fname = ucwords(mysqli_real_escape_string($con, $_POST["fname"]));
    $mname = ucwords(mysqli_real_escape_string($con, $_POST["mname"]));
    $lname = ucwords(mysqli_real_escape_string($con, $_POST["lname"]));
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $contact = mysqli_real_escape_string($con, $_POST["contact"]);
    $barangay = ucwords(mysqli_real_escape_string($con, $_POST["barangay"]));
    $city = ucwords(mysqli_real_escape_string($con, $_POST["city"]));
    $province = ucwords(mysqli_real_escape_string($con, $_POST["province"]));


    $photo_name = $_FILES["photo"]["name"];


    if(empty($photo_name)
    ) {
        $sql = "UPDATE tbl_staff SET fname='$fname', mname='$mname',
                                    lname='$lname', email='$email', 
                                    contact='$contact', barangay='$barangay', city='$city', province='$province' WHERE staff_id='{$_SESSION["A_ID"]}'";

        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<script>
                Swal.fire({
                        position: 'top',
                        icon: 'success',
                        title: 'Successfully updated',
                        showConfirmButton: false,
                        timer: 1000
                        });
                </script>";

            echo "
                <script>
                   setTimeout( async() => {
                        window.location='../admin/main-account.php';
                   }, 1000)
                </script>
            ";

        } else {
            echo "<script>
                Swal.fire({
                        position: 'top',
                        icon: 'error',
                        title: 'Profile not update',
                        showConfirmButton: false,
                        timer: 1000
                        });
                </script>";

                echo "
                    <script>
                    setTimeout( async() => {
                            window.location='../admin/main-account.php';
                    }, 1000)
                    </script>
                ";
            echo  $conn->error;
        }
        
    } else {
        $photo_tmp_name = $_FILES["photo"]["tmp_name"];
        $photo_size = $_FILES["photo"]["size"];
        $photo_new_name = rand() . $photo_name;

        if ($photo_size > 5242880) {
            echo "<script>alert('Photo is very big. Maximum photo uploading size is 5MB.');</script>";
        } else {
            $sql = "UPDATE tbl_staff SET fname='$fname', mname='$mname',
                                    lname='$lname', email='$email', 
                                    contact='$contact', barangay='$barangay', city='$city', province='$province', photo='$photo_new_name' WHERE staff_id='{$_SESSION["A_ID"]}'";


            $result = mysqli_query($con, $sql);
            if ($result) {
                move_uploaded_file($photo_tmp_name, "../images/" . $photo_new_name);
                 echo "<script>
                Swal.fire({
                        position: 'top',
                        icon: 'success',
                        title: 'Successfully updated',
                        showConfirmButton: false,
                        timer: 1000
                        });
                </script>";

                echo "
                    <script>
                    setTimeout( async() => {
                            window.location='../admin/main-account.php';
                    }, 1000)
                    </script>
                ";
            } else {
                echo "<script>
                Swal.fire({
                        position: 'top',
                        icon: 'error',
                        title: 'Profile not update',
                        showConfirmButton: false,
                        timer: 1000
                        });
                </script>";

                echo "
                    <script>
                    setTimeout( async() => {
                            window.location='../admin/main-account.php';
                    }, 1000)
                    </script>
                ";
                echo  $con->error;
            }
        }
    }
}
?>
</body>
</html>