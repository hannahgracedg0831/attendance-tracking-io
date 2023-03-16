<?php 
 
// Load the database configuration file 
require_once '../connection.php'; 
 
// Fetch records from database 
$query = $con->query("SELECT * FROM tbl_visitor ORDER BY id ASC"); 
 
if($query->num_rows > 0){ 
    $delimiter = ",";
    $filename = "visitor-data_" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('VISITOR ID', 'VISITOR NAME', 'BARANGAY', 'CITY/MUNICIPALITY', 'PROVINCE', 'DATE OF BIRTH', 'SEX', 'MOBILE #', 'EMAIL ADDRESS'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
        //$status = ($row['status'] == 1)?'Active':'Inactive';
        $fullname =  $row['lname'].', '.$row['fname'].' '.$row['mname'];
        $lineData = array($row['visitor_id'], $fullname, $row['barangay'], $row['city'], $row['province'], $row['dob'], $row['sex'], $row['contact'], $row['email'],); 
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