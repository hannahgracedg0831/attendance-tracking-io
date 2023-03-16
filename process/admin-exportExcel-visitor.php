<?php
include_once '../connection.php'; 

$query = $con->query("SELECT * FROM tbl_visitor ORDER BY id ASC");

while($row = $query->fetch_assoc()){ 
    $fullname =  $row['lname'].', '.$row['fname'].' '.$row['mname'];

    $data = array(
        array("VISITOR ID" => $row['visitor_id'], "VISITOR NAME" => $fullname, 
              "POSITION" => $row['position'], "BARANGAY" => $row['barangay'], 
              "CITY/MUNICIPALITY" => $row['city'], 
              "PROVINCE" => $row['province'], "DATE OF BIRTH" => $row['dob'], 
              "SEX" => $row['sex'], "MOBILE #" => $row['contact'], "EMAIL ADDRESS" => $row['email']),
    );

    function filterData(&$str){
        $str = preg_replace("/\t/", "\\t", $str);
        $str = preg_replace("/\r?\n/", "\\n", $str);
        if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
    }

    // Name for Excel file
    $file = "visitor-data_" . date('Y-m-d') . ".xlsx";

    // Headers to force download Excel file
    header("Content-Disposition: attachment; filename=\"$file\"");
    header("Content-Type: application/vnd.ms-excel");

    $flag = false;
    foreach($data as $row) {
        if(!$flag) {

            // Set column names as first row
            echo implode("\t", array_keys($row)) . "\n";
            $flag = true;
        }

        // Filter data
        array_walk($row, 'filterData');
        echo implode("\t", array_values($row)) . "\n";
    }
}
    exit;
?>