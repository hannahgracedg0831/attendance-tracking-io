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

if(isset($_POST['generate']))
{    
    $facility = $_POST['facility'];
    $quantity = $_POST['quantity'];
    $isTrue;
    for ($i=1; $i <= $quantity ; $i++) { 
      
 
    $visitorId = rand();
    

     
     $sql = "INSERT INTO tbl_visitor (`visitor_id`,`facility`)
     VALUES ('$visitorId','$facility')";
     mysqli_query($con, $sql);
     $isTrue=true;
   }
     if ($isTrue) {
        echo "<script>
            Swal.fire({
                    position: 'top',
                    icon: 'success',
                    title: 'Successfully!',
                    showConfirmButton: false,
                    timer: 1000
                    });
            </script>";

        echo "
            <script>
                setTimeout( async() => {
                    window.location='../admin/main-generateQR.php';
                }, 1000)
            </script>
        ";
     } else {
        echo "<script>
            Swal.fire({
                    position: 'top',
                    icon: 'error',
                    title: 'Failed!',
                    showConfirmButton: false,
                    timer: 1000
                    });
            </script>";

        echo "
            <script>
                setTimeout( async() => {
                    window.location='../admin/main-generateQR.php';
                }, 1000)
            </script>
        ";
     }
     mysqli_close($con);
}
?>

</body>
</html>