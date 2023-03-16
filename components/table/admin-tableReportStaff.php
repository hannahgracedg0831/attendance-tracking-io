<table id = "table" class="table table-bordered">
				<thead>
					<tr>
						<!-- <th class="text-center">
							<input type="checkbox" id="selectAll" onchange="checkAll(this)">&nbsp;Select All
						</th> -->
						<th class="text-center">Staff ID</th>
						<th class="text-center">Name</th>
						<th class="text-center">Time In</th>
						<th class="text-center">Guard on duty</th>
						<th class="text-center">Time Out</th>
						<th class="text-center">Guard on duty</th>
						<th class="text-center">Date</th>
					
                        
					</tr>
				</thead>
				<tbody>
						<?php
				
	if(isset($_POST['searchDate'])){
		require_once '../connection.php';
		date_default_timezone_set("Singapore");
		$date =$_POST['date'];
		include '../components/modal/filterdataTime.php';
		include '../components/modal/csvModal.php'; 
		include '../components/modal/printModal.php'; 
		$datelogs = file_get_contents('../jsonLogs/date-logs.json');
		$logsdate = json_decode($datelogs, true);
		foreach ($logsdate as $key => $value) {
			foreach ($value as $k => $v) {
					if($v['date']==$date){
							$data = file_get_contents('../jsonLogs/'.$date.'.json');
							$Logs = json_decode($data, true);
						
								// echo"asdddddddddddddddddddddddds";

	
							foreach ($Logs as $key => $value) {
								foreach ($value as $k => $v) {
									$object =  (object) $v;
						if($v['type']=='staff'){
							$sql ="SELECT * FROM tbl_staff WHERE staff_id='$k'";
							$query = $con->query($sql);
							$fetch = $query->fetch_assoc();
							$charat = substr($fetch['mname'], 0, 1);
							$name= $fetch['lname'].', '.$fetch['fname'].' '.$charat.'.';
							$guardInId= $object->GuardIn;
						$guardOutId= $object->GuardOut;
						$sqls ="SELECT * FROM tbl_staff WHERE staff_id='$guardInId'";
							$querys = $con->query($sqls);
							$fetchs = $querys->fetch_assoc();
							$sqls ="SELECT * FROM tbl_staff WHERE staff_id='$guardOutId'";
							$querys1 = $con->query($sqls);
							$fetchs1 = $querys1->fetch_assoc();
							$charat2 = substr($fetchs['mname'], 0, 1);
							$guardIn= $fetchs['lname'].', '.$fetchs['fname'].' '.$charat2.'.';
							if(!empty($guardOutId)){
								$charat1 = substr($fetchs1['mname'], 0, 1);
							$guardOut= $fetchs1['lname'].', '.$fetchs1['fname'].' '.$charat1.'.';
							}else{
								$guardOut="";
							}
						?>
						<tr >
						<!-- <td class="text-center"><input type="checkbox" onchange="#" name="reportStaffID" value="<?php echo $fetch['staff_id'] ?>"></td> -->
						<td class="text-center"><?php echo $fetch['staff_id']?></td>
					<td class="text-center"><?php echo $name;?></td>
			<?php

		
					?>
<td class="text-center"><?php echo $object->TimeIn?></td>
<td class="text-center"><?php echo $object->GuardIn?></td>
<td class="text-center"><?php echo $object->TimeOut?></td>
<td class="text-center"><?php echo $object->GuardOut?></td>
<td class="text-center"><?php echo $object->Date?></td>

		
		</tr>
		<?php
				  }
				
				 } 
				}
			
		
			}

		}
	
	}


} 
if(isset($_POST['searchTime'])){
	require_once '../connection.php';
	date_default_timezone_set("Singapore");
	$date=$_POST['date'];
	$TIorTO= $_POST['TIorTO'];
	$from=$_POST['from'];
	$to=$_POST['to'];
	$ffrom=date("h:i:a",strtotime($from));
	$fto=date("h:i:a",strtotime($to));
	// $to1=setTime($to);
	// $from1=date_format($from, 'G:ia');
	include '../components/modal/filterdataTime.php';
		include '../components/modal/csvModal.php'; 
		include '../components/modal/printModal.php'; 
	$datelogs = file_get_contents('../jsonLogs/date-logs.json');
	$logsdate = json_decode($datelogs, true);
	foreach ($logsdate as $key => $value) {
		foreach ($value as $k => $val) {
				if($val['date']==$date){
						$data = file_get_contents('../jsonLogs/'.$date.'.json');
						$Logs = json_decode($data, true);
					
						// echo $ffrom;

						foreach ($Logs as $key => $value) {
							foreach ($value as $k => $v) {
								// echo"asdddddddddddddddddddddddds";
							
								// // echo $to1;
								// echo '</br>';

								// // echo $to;
								$object =  (object) $v;
								$tm=date("h:i:sa",strtotime($object->$TIorTO));
								if($ffrom = $tm  && $fto >=  $tm){
					if($object->type =='staff'){
						$sql ="SELECT * FROM tbl_staff WHERE staff_id='$k'";
						$query = $con->query($sql);
						$fetch = $query->fetch_assoc();
						$charat = substr($fetch['mname'], 0, 1);
						$name= $fetch['lname'].', '.$fetch['fname'].' '.$charat.'.';
						$guardInId= $object->GuardIn;
						$guardOutId= $object->GuardOut;
						$sqls ="SELECT * FROM tbl_staff WHERE staff_id='$guardInId'";
							$querys = $con->query($sqls);
							$fetchs = $querys->fetch_assoc();
							$sqls ="SELECT * FROM tbl_staff WHERE staff_id='$guardOutId'";
							$querys1 = $con->query($sqls);
							$fetchs1 = $querys1->fetch_assoc();
							$charat2 = substr($fetchs['mname'], 0, 1);
							$guardIn= $fetchs['lname'].', '.$fetchs['fname'].' '.$charat2.'.';
							if(!empty($guardOutId)){
								$charat1 = substr($fetchs1['mname'], 0, 1);
							$guardOut= $fetchs1['lname'].', '.$fetchs1['fname'].' '.$charat1.'.';
							}else{
								$guardOut="";
							}
						?>
						<tr class="delete_report<?php echo $fetch['staff_id'] ?>">
						<td class="text-center"><input type="checkbox" onchange="#" name="reportStaffID" value="<?php echo $fetch['staff_id'] ?>"></td>
						<td class="text-center"><?php echo $fetch['staff_id']?></td>
					<td class="text-center"><?php echo $name;?></td>
			<?php

		
					?>
<td class="text-center"><?php echo $object->TimeIn?></td>
<td class="text-center"><?php echo $object->GuardIn?></td>
<td class="text-center"><?php echo $object->TimeOut?></td>
<td class="text-center"><?php echo $object->GuardOut?></td>
<td class="text-center"><?php echo $object->Date?></td>

	</tr>
	<?php		  }
								}
			 } 
			}
		
	
		}

	}

}


}else{
	require_once '../connection.php';
	date_default_timezone_set("Singapore");
	$date = date('Y-m-d');
	include '../components/modal/filterdataTime.php';
	include '../components/modal/csvModal.php'; 
	include '../components/modal/printModal.php'; 
	$datelogs = file_get_contents('../jsonLogs/date-logs.json');
	$logsdate = json_decode($datelogs, true);
	foreach ($logsdate as $key => $value) {
		foreach ($value as $k => $v) {
				if($v['date']==$date){
						$data = file_get_contents('../jsonLogs/'.$date.'.json');
						$Logs = json_decode($data, true);
					
							// echo"asdddddddddddddddddddddddds";


						foreach ($Logs as $key => $value) {
							foreach ($value as $k => $v) {
								$object =  (object) $v;
					if($v['type']=='staff'){
						$sql ="SELECT * FROM tbl_staff WHERE staff_id='$k'";
						$query = $con->query($sql);
						$fetch = $query->fetch_assoc();
						$charat = substr($fetch['mname'], 0, 1);
						$name= $fetch['lname'].', '.$fetch['fname'].' '.$charat.'.';
						$guardInId= $object->GuardIn;
					$guardOutId= $object->GuardOut;
					$sqls ="SELECT * FROM tbl_staff WHERE staff_id='$guardInId'";
						$querys = $con->query($sqls);
						$fetchs = $querys->fetch_assoc();
						$sqls ="SELECT * FROM tbl_staff WHERE staff_id='$guardOutId'";
						$querys1 = $con->query($sqls);
						$fetchs1 = $querys1->fetch_assoc();
						$charat2 = substr($fetchs['mname'], 0, 1);
						$guardIn= $fetchs['lname'].', '.$fetchs['fname'].' '.$charat2.'.';
						if(!empty($guardOutId)){
							$charat1 = substr($fetchs1['mname'], 0, 1);
						$guardOut= $fetchs1['lname'].', '.$fetchs1['fname'].' '.$charat1.'.';
						}else{
							$guardOut="";
						}
					?>
					<tr >
					<!-- <td class="text-center"><input type="checkbox" onchange="#" name="reportStaffID" value="<?php echo $fetch['staff_id'] ?>"></td> -->
					<td class="text-center"><?php echo $fetch['staff_id']?></td>
				<td class="text-center"><?php echo $name;?></td>
		<?php

	
				?>
<td class="text-center"><?php echo $object->TimeIn?></td>
<td class="text-center"><?php echo $object->GuardIn?></td>
<td class="text-center"><?php echo $object->TimeOut?></td>
<td class="text-center"><?php echo $object->GuardOut?></td>
<td class="text-center"><?php echo $object->Date?></td>

	
	</tr>
	<?php
			  }
			
			 } 
			}
		
	
		}

	}

}
}
				  ?>
				</tbody>
				</table>