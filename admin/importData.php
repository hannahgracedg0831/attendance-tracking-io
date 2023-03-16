<?php
// Load the database configuration file
require_once '../connection.php'; 

if(isset($_POST['submit'])){
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                $student_no   = $line[0];
                $last_name        = $line[1];
                $first_name        = $line[2];
                $middle_name        = $line[3];
                $course       = $line[4];
                $birthday = $line[5];
                $address  = $line[6];
                $image       = $line[7];
                $barcode = $line[8];
                $user_id     = $line[9];
                $type  = $line[10];
               
               
                $prevQuery = "SELECT id FROM tbl_students WHERE student_no = '$student_no'";
                $prevResult = $con->query($prevQuery);
                
                if($prevResult->num_rows > 0){
                    // Update member data in the database
                    $con->query("UPDATE tbl_students SET last_name = '$last_name',first_name = '$first_name',middle_name = '$middle_name', course = '$course',
                     birthday = '$birthday', address = '$address',image = '$image', barcode = '$barcode',
                     user_id  = '$user_id', type = '$type' WHERE student_no = '$student_no'");
                }else{
                    // Insert member data in the database
                    $con->query("INSERT INTO tbl_students (last_name,first_name,middlename,
                    student_no,course, birthday, address,image,barcode,user_id,type)
                     VALUES ('$last_name','$first_name','$middle_name','$student_no','$course','$birthday',
                     '$address','$image','$barcode','$user_id','$type')");
                }
            }
            
            // Close opened CSV file
            fclose($csvFile);
            
            $qstring = '?status=succ';

        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}

// Redirect to the listing page
header("Location: main-students.php".$qstring);