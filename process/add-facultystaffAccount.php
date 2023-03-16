<html>
    <head>
        <!-- SweetAlert -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript" src="../js/sweetalert2/sweetalert2.js"></script>
        <link rel="stylesheet" href="../css/sweetalert2/sweetalert2.css">
    </head>
<body>
<?php
include_once('../connection.php');

if(isset($_POST['saveStaff']))
{	 
	 $id = $_POST['id'];
     $username = $_POST['username'];
     $password = $_POST['password'];
     
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
     
	 $sql = "INSERT INTO tbl_user (user_id,username,password)
	 VALUES ('$id','$username','$hashedPassword')";
	 if (mysqli_query($con, $sql)) {
        echo "<script>
            Swal.fire({
                    position: 'top',
                    icon: 'success',
                    title: 'Added Successfully!',
                    showConfirmButton: false,
                    timer: 1000
                    });
            </script>";

        echo "
            <script>
                setTimeout( async() => {
                    window.location='../admin/main-staffAccount.php';
                }, 1000)
            </script>
        ";
	 } else {
		echo "<script>
            Swal.fire({
                    position: 'top',
                    icon: 'error',
                    title: 'Add Failed!',
                    showConfirmButton: false,
                    timer: 1000
                    });
            </script>";

        echo "
            <script>
                setTimeout( async() => {
                    window.location='../admin/main-staffAccount.php';
                }, 1000)
            </script>
        ";
	 }
	 mysqli_close($con);
}


?>

</body>
</html>