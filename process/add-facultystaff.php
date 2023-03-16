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

if(isset($_POST['saveStaff']))
{	 
	 $staffid = $_POST['staff_id'];
     $fname = ucwords($_POST['fname']);
     $mname = ucwords($_POST['mname']);
     $lname = ucwords($_POST['lname']);
     $email = $_POST['email'];
     $contact = $_POST['contact'];
     $dob = $_POST['dob'];
     $sex = $_POST['sex'];
     $position = $_POST['position'];
     $barangay = ucwords($_POST['barangay']);
     $city = ucwords($_POST['city']);
     $province = ucwords($_POST['province']);

     
	 $sql = "INSERT INTO tbl_staff (staff_id,fname,lname,mname,position,email,contact,dob,sex,barangay,city,province)
	 VALUES ('$staffid','$fname','$lname','$mname','$position','$email','$contact','$dob','$sex','$barangay','$city','$province')";
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
                    window.location='../admin/main-facultystaff.php';
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
                    window.location='../admin/main-facultystaff.php';
                }, 1000)
            </script>
        ";
	 }
	 mysqli_close($con);
}
?>

</body>
</html>