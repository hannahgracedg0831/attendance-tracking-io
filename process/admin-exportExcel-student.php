<?php
include_once '../connection.php'; 

$query = $con->query("SELECT * FROM tbl_students ORDER BY id ASC");

while($row = $query->fetch_assoc()){ 
    $fullname =  $row['last_name'].', '.$row['first_name'].' '.$row['middle_name'];

    $data = array(
        array("STUDENT ID" => $row['student_no'], "STUDENT NAME" => $fullname, 
        "ADRDESS" => $row['address'], 
              "COURSE" => $row['course'],   
              "BIRTHDATE" => $row['birthday'],
            "IMAGE" => $row['image'],
              "BARCODE" => $row['barcode']),
    );

    function filterData(&$str){
        $str = preg_replace("/\t/", "\\t", $str);
        $str = preg_replace("/\r?\n/", "\\n", $str);
        if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
    }

    // Name for Excel file
    $file = "student-data_" . date('Y-m-d') . ".xlsx";

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