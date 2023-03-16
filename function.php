<?php

function getPosition($id)
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendancetrackingdb";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

    $sql = "SELECT * FROM tbl_students WHERE `barcode`='$id'";
        $student = mysqli_query($con,$sql);
        $sqls = "SELECT * FROM tbl_staff WHERE `staff_id`='$id'";
        $staff = mysqli_query($con,$sqls);
        $sqlss = "SELECT * FROM tbl_visitor WHERE `visitor_id`='$id'";
        $visitor = mysqli_query($con,$sqlss);
        if ( mysqli_num_rows($student) > 0){
            return 'student';
           
        }
        if (mysqli_num_rows($staff) > 0){
            return 'staff';
           
        }
      
        if ( mysqli_num_rows($visitor) > 0){
            return 'visitor';
           
        }
      
      

    
}

?>