<html>
    <head>
        <!-- SweetAlert -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript" src="../js/sweetalert2/sweetalert2.js"></script>
        <link rel="stylesheet" href="../css/sweetalert2/sweetalert2.css">
    </head>
<body>

<?php 
require_once '../connection.php';

if(isset($_POST['change'])){
	
	$sql = "UPDATE `tbl_user` SET `status`='".$_POST['status']."' WHERE user_id='".$_POST['user_id']."'";

    // print_r($sql);
    // die;
	
	if ($con->query($sql) == TRUE) 
	{
        echo "<script>
            Swal.fire({
                    position: 'top',
                    icon: 'success',
                    title: 'Updated successfully!',
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
	else 
	{
		echo "<script>
            Swal.fire({
                    position: 'top',
                    icon: 'error',
                    title: 'Update Failed!',
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