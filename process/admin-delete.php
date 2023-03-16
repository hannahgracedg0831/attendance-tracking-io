<?php
require_once '../connection.php';
	
	if(isset($_POST['user_id'])){
            $user_id = $_POST['user_id'];

            $query = mysqli_query($con, "SELECT * FROM `tbl_user` WHERE `user_id` = '$user_id'") or die(mysqli_error($con));
            $fetch  = mysqli_fetch_array($query);

            mysqli_query($con, "DELETE FROM `tbl_user` WHERE `user_id` = '$user_id'") or die(mysqli_error($con));
            header('Location: ../admin/main-staffAccount.php');

	}

    if(isset($_POST['visitor_id'])){
            $visitor_id = $_POST['visitor_id'];

            $query = mysqli_query($con, "SELECT * FROM `tbl_visitor` WHERE `visitor_id` = '$visitor_id'") or die(mysqli_error($con));
            $fetch  = mysqli_fetch_array($query);

            mysqli_query($con, "DELETE FROM `tbl_visitor` WHERE `visitor_id` = '$visitor_id'") or die(mysqli_error($con));
            header('Location: ../admin/main-generateQR.php');

        }
    if(isset($_POST['student_id'])){
            $student_id = $_POST['student_id'];

            $query = mysqli_query($con, "SELECT * FROM `tbl_student` WHERE `student_id` = '$student_id'") or die(mysqli_error($con));
            $fetch  = mysqli_fetch_array($query);

            mysqli_query($con, "DELETE FROM `tbl_student` WHERE `student_id` = '$student_id'") or die(mysqli_error($con));
            header('Location: ../admin/main-students.php');

	}
    if(isset($_POST['report_id'])){
            $report_id = $_POST['report_id'];

            $query = mysqli_query($con, "SELECT * FROM `tbl_report` WHERE `report_id` = '$report_id'") or die(mysqli_error($con));
            $fetch  = mysqli_fetch_array($query);

            mysqli_query($con, "DELETE FROM `tbl_report` WHERE `report_id` = '$report_id'") or die(mysqli_error($con));
            header('Location: ../admin/main-reports.php');

	}
    if(isset($_POST['staff_id'])){
            $staff_id = $_POST['staff_id'];

            $query = mysqli_query($con, "SELECT * FROM `tbl_staff` WHERE `staff_id` = '$staff_id'") or die(mysqli_error($con));
            $fetch  = mysqli_fetch_array($query);

            mysqli_query($con, "DELETE FROM `tbl_staff` WHERE `staff_id` = '$staff_id'") or die(mysqli_error($con));
            header('Location: ../admin/main-facultystaff.php');

	}
    if(isset($_POST['id'])){
        $id = $_POST['id'];

        $query = mysqli_query($con, "SELECT * FROM `backup_data` WHERE `id` = '$id'") or die(mysqli_error($con));
        $fetch  = mysqli_fetch_array($query);

        mysqli_query($con, "DELETE FROM `backup_data` WHERE `id` = '$id'") or die(mysqli_error($con));
        header('Location: ../admin/main-backupRestore.php');

}
?>
