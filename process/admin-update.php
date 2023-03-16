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

if(isset($_POST['updateStudent'])){
	
	$sql = "UPDATE `tbl_student` SET `student_id`='".$_POST['student_id']."', `lname`='".ucwords($_POST['lname'])."', `fname`='".ucwords($_POST['fname'])."', `mname`='".ucwords($_POST['mname'])."',
                                   `course`='".strtoupper($_POST['course'])."', `year_section`='".strtoupper($_POST['year_section'])."', `barangay`='".ucwords($_POST['barangay'])."', `city`='".ucwords($_POST['city'])."', `province`='".ucwords($_POST['province'])."',
                                   `dob`='".$_POST['dob']."', `sex`='".$_POST['sex']."', `contact`='".$_POST['contact']."', `email`='".$_POST['email']."'
                                   WHERE student_id = '".$_POST['student_id']."'";

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
                    window.location='../admin/main-students.php';
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
                    window.location='../admin/main-students.php';
                }, 1000)
            </script>
        ";
	}
	
    mysqli_close($con);
}

if(isset($_POST['updateStaff'])){
	
	$sql = "UPDATE `tbl_staff` SET `staff_id`='".$_POST['staff_id']."', `lname`='".ucwords($_POST['lname'])."', `fname`='".ucwords($_POST['fname'])."', `mname`='".ucwords($_POST['mname'])."',
                                   `position`='".$_POST['position']."', `barangay`='".ucwords($_POST['barangay'])."', `city`='".ucwords($_POST['city'])."', `province`='".ucwords($_POST['province'])."',
                                   `dob`='".$_POST['dob']."', `sex`='".$_POST['sex']."', `contact`='".$_POST['contact']."', `email`='".$_POST['email']."'
                                   WHERE staff_id = '".$_POST['staff_id']."'";

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
                    window.location='../admin/main-facultystaff.php';
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