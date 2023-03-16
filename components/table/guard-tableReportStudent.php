<div class="tab-content" id="pills-tabContent">

<!-- Tab 1 -->
  	<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
		<table id = "table" class="table table-bordered">
			<thead>
				<tr>
					<th class="text-center">Student ID</th>
					<th class="text-center">Name</th>
					<th class="text-center">Time IN</th>
					<th class="text-center">Time OUT</th>
					<th class="text-center">Date</th>
                        
				</tr>
			</thead>
			<tbody>
				<?php
					$date = date('Y-m-d');
					$datelogs = file_get_contents('../jsonLogs/date-logs.json');
					$logsdate = json_decode($datelogs, true);
					// echo "das";	
					foreach ($logsdate as $key => $value) {
						foreach ($value as $k => $v) {
							if($v['date']==$date){
							
							require_once '../connection.php';

						date_default_timezone_set("Singapore");
						$data = file_get_contents('../jsonLogs/'.$date.'.json');
        				$Logs = json_decode($data, true);
								
						foreach ($Logs as $key => $value) {
							
							foreach ($value as $k => $v) {
									
							if($v['type']=='student'){
								$sql ="SELECT * FROM tbl_students WHERE student_no='$k'";
								$query = $con->query($sql);
								$fetch = $query->fetch_assoc();

								$charat = substr($fetch['middle_name'], 0, 1);
								$name= $fetch['last_name'].', '.$fetch['first_name'].' '.$charat.'.';
								
				?>
				
				<tr >
					<td class="text-center"><?php echo $fetch['student_no']?></td>
					<td class="text-center"><?php echo $name;?></td>
					<td class="text-center"><?php echo $v['TimeIn'];?></td>
					<td class="text-center"><?php echo $v['TimeOut'];?></td>
					<td class="text-center"><?php echo $v['Date']?></td>
				</tr>
					<?php  }
						}
					}
				}
			}
		}
	?>
			</tbody>
		</table>
	</div>
<!-- /Tab 1 -->

<!-- Tab 2 -->
  	<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  		<table id = "table1" class="table table-bordered">
			<thead>
				<tr>
					<th class="text-center">Student ID</th>
					<th class="text-center">Name</th>
					<th class="text-center">Time IN</th>
					<th class="text-center">Time OUT</th>
					<th class="text-center">Date</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$date = date('Y-m-d');
					$datelogs = file_get_contents('../jsonLogs/date-logs.json');
					$logsdate = json_decode($datelogs, true);
					$count=0;
					foreach ($logsdate as $key => $value) {
						foreach ($value as $k => $v) {
							if($v['date']==$date){
												
						date_default_timezone_set("Singapore");
						$data = file_get_contents('../jsonLogs/'.$date.'.json');
						$Logs = json_decode($data, true);

						foreach ($Logs as $key => $value) {
							foreach ($value as $k => $v) {

							if($v['type']=='student'){
								if(empty($v['TimeOut'])){
									$sql ="SELECT * FROM tbl_students WHERE student_no='$k'";
									$query = $con->query($sql);
									$fetch = $query->fetch_assoc();

									$charat = substr($fetch['middle_name'], 0, 1);
								$name= $fetch['last_name'].', '.$fetch['first_name'].' '.$charat.'.';

									// $count++;
				?>
				
				<tr >
					<td class="text-center"><?php echo $fetch['student_no']?></td>
					<td class="text-center"><?php echo $name;?></td>
					<td class="text-center"><?php echo $v['TimeIn'];?></td>
					<td class="text-center"><?php echo $v['TimeOut'];?></td>
					<td class="text-center"><?php echo $v['Date']?></td>
				</tr>
					<?php 	} 
						}
					}
				}
			}
		}
	} 
	// echo $count;
	?>
			</tbody>
		</table>
	</div>
<!-- /Tab 2 -->


<!-- Tab 3 -->
  	<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
  		<table id = "table2" class="table table-bordered">
			<thead>
				<tr>
					<th class="text-center">Student ID</th>
					<th class="text-center">Name</th>
					<th class="text-center">Time IN</th>
					<th class="text-center">Time OUT</th>
					<th class="text-center">Date</th>  
				</tr>
			</thead>
			<tbody>
				<?php
					$date = date('Y-m-d');
					$datelogs = file_get_contents('../jsonLogs/date-logs.json');
					$logsdate = json_decode($datelogs, true);

					foreach ($logsdate as $key => $value) {
						foreach ($value as $k => $v) {
							if($v['date']==$date){

						date_default_timezone_set("Singapore");
						$data = file_get_contents('../jsonLogs/'.$date.'.json');
						$Logs = json_decode($data, true);

						foreach ($Logs as $key => $value) {
							foreach ($value as $k => $v) {

							if($v['type']=='student'){
								if(!empty($v['TimeOut'])){
									$sql ="SELECT * FROM tbl_students WHERE student_no='$k'";
									$query = $con->query($sql);
									$fetch = $query->fetch_assoc();

								$charat = substr($fetch['middle_name'], 0, 1);
								$name= $fetch['last_name'].', '.$fetch['first_name'].' '.$charat.'.';				?>
				
				<tr >
					<td class="text-center"><?php echo $fetch['student_no']?></td>
					<td class="text-center"><?php echo $name;?></td>
					<td class="text-center"><?php echo $v['TimeIn'];?></td>
					<td class="text-center"><?php echo $v['TimeOut'];?></td>
					<td class="text-center"><?php echo $v['Date']?></td>
				</tr>
					<?php  }
						}
					}
				}
			}
		}
	}?>
			</tbody>
		</table>
	</div>
<!-- /Tab 3 -->

</div> 