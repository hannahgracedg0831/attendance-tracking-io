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

if(isset($_POST['signup']))
{    
     $visitorId = rand();
     $fname = ucwords($_POST['fname']);
     $mname = ucwords($_POST['mname']);
     $lname = ucwords($_POST['lname']);
     $email = $_POST['email'];
     $contact = $_POST['contact'];
     $dob = $_POST['dob'];
     $sex = $_POST['sex'];
     $barangay = ucwords($_POST['barangay']);
     $city = ucwords($_POST['city']);
     $province = ucwords($_POST['province']);

     
     $sql = "INSERT INTO tbl_visitor (visitor_id,fname,lname,mname,email,contact,dob,sex,barangay,city,province)
     VALUES ('$visitorId','$fname','$lname','$mname','$email','$contact','$dob','$sex','$barangay','$city','$province')";

     if (mysqli_query($con, $sql)) {
        echo "<script>
            Swal.fire({
                    position: 'top',
                    icon: 'success',
                    title: 'Registered Successfully!',
                    showConfirmButton: false,
                    timer: 1000
                    });
            </script>";

        echo "
            <script>
                setTimeout( async() => {
                    window.location='../qrcode.php';
                }, 1000)
            </script>
        ";
     } else {
        echo "<script>
            Swal.fire({
                    position: 'top',
                    icon: 'error',
                    title: 'Registration Failed!',
                    showConfirmButton: false,
                    timer: 1000
                    });
            </script>";

        echo "
            <script>
                setTimeout( async() => {
                    window.location='../index.php';
                }, 1000)
            </script>
        ";
     }
     mysqli_close($con);
}
?>

</body>
</html>