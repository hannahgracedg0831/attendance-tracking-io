<?php 
 
// Load the database configuration file 
include_once '../connection.php'; 
 
// Fetch records from database 
if(isset($_POST['date'])){ 
	$date=$_POST['date'];
    $delimiter = ",";
    $filename = "visitor-data-report_" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('Visitor ID', 'Visitor Name', 'Time In', 'Guard Name', 'Time Out', 'Guard Name', 'Date'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 

				
	
	
		date_default_timezone_set("Singapore");
		// $date =$_POST['date'];
		$datelogs = file_get_contents('../jsonLogs/date-logs.json');
		$logsdate = json_decode($datelogs, true);
		foreach ($logsdate as $key => $value) {
			foreach ($value as $k => $v) {
					if($v['date']==$date){
							$data = file_get_contents('../jsonLogs/'.$date.'.json');
							$Logs = json_decode($data, true);
						
	
							foreach ($Logs as $key => $value) {
								foreach ($value as $k => $v) {
									$object =  (object) $v;
									
						if($v['type']=='visitor'){
							$sql ="SELECT * FROM tbl_visitor WHERE visitor_id='$k'";
							$query = $con->query($sql);
							$fetch = $query->fetch_assoc();
							$name= $fetch['lname'].', '.$fetch['fname'].' '.$fetch['mname'];
							$guardInId= $object->GuardIn;
							$guardOutId= $object->GuardOut;
							$sqls ="SELECT * FROM tbl_staff WHERE staff_id='$guardInId'";
							$querys = $con->query($sqls);
							$fetchs = $querys->fetch_assoc();
							$sqls ="SELECT * FROM tbl_staff WHERE staff_id='$guardOutId'";
							$querys1 = $con->query($sqls);
							$fetchs1 = $querys1->fetch_assoc();
							$guardIn= $fetchs['lname'].', '.$fetchs['fname'].' '.$fetchs['mname'];
							if(!empty($guardOutId)){
							$guardOut= $fetchs1['lname'].', '.$fetchs1['fname'].' '.$fetchs1['mname'];
							}else{
								$guardOut="";
							}
                            $lineData = array($fetch['visitor_id'], $name,$object->TimeIn, $guardIn, $object->TimeOut,  $guardOut, $object->Date); 
                            fputcsv($f, $lineData, $delimiter); 
							?>
							
						
		<?php
				  }
				
				 } 
				}
			
		
			}

		}
	
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