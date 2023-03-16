<?php 
 
// Load the database configuration file 
include_once '../connection.php'; 
 
// Fetch records from database 
$query = $con->query("SELECT * FROM tbl_students ORDER BY id ASC"); 
 
if($query->num_rows > 0){ 
    $delimiter = ",";
    $filename = "student-data_" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('STUDENT ID', 'STUDENT NAME', 'COURSE','ADDRESS','QRCODE', 'STATUS'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
        //$status = ($row['status'] == 1)?'Active':'Inactive';
        $fullname =  $row['last_name'].', '.$row['first_name'].' '.$row['middle_name'];
        $lineData = array($row['student_no'], $fullname, $row['course'],$row['address'],$row['barcode'],$row['status'],); 
        fputcsv($f, $lineData, $delimiter); 
    } 
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 

exit; 
 
?>