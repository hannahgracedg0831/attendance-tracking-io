<!-- <div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"> -->
  		<table id = "table1" class="table table-bordered">
			<thead>
				<tr>
					<th class="text-center">ID</th>
					<!-- <th class="text-center">Name</th> -->
					<th class="text-center">Time IN</th>
					<th class="text-center">Position</th>
					<th class="text-center">Date</th>
				</tr>
			</thead>
			<tbody>
				<?php
				
				require_once '../connection.php';
				if(isset($_POST['searchDate'])){
					date_default_timezone_set("Singapore");
					
					$date = $_POST['date'];
					include '../components/modal/printModalpend.php'; 
					$datelogs = file_get_contents('../jsonLogs/date-logs.json');
					$logsdate = json_decode($datelogs, true);
					$count=0;
					foreach ($logsdate as $key => $value) {
						foreach ($value as $k => $v) {
							if($v['date']==$date){
												
				
						$data = file_get_contents('../jsonLogs/'.$date.'.json');
						$Logs = json_decode($data, true);

						foreach ($Logs as $key => $value) {
							foreach ($value as $k => $v) {

							
								if(empty($v['TimeOut'])){
									$sql ="SELECT * FROM tbl_student WHERE student_id='$k'";
									$query = $con->query($sql);
									$fetch = $query->fetch_assoc();

									// $charat = substr($fetch['mname'], 0, 1);
									// $name= $fetch['lname'].', '.$fetch['fname'].' '.$charat.'.';

									// $count++;
				?>
				
				<tr >
					<td class="text-center"><?php echo $k ?></td>
				
					<td class="text-center"><?php echo $v['TimeIn'];?></td>
					<td class="text-center"><?php echo $v['type'];?></td>
					<td class="text-center"><?php echo $v['Date']?></td>
				</tr>
					<?php 	 
						}
					}
				}
			}
		}
	} 
				}else{
				
					date_default_timezone_set("Singapore"); 
					$date = date('Y-m-d');
					include '../components/modal/printModalpend.php';
					$datelogs = file_get_contents('../jsonLogs/date-logs.json');
					$logsdate = json_decode($datelogs, true);
					$count=0;
					foreach ($logsdate as $key => $value) {
						foreach ($value as $k => $v) {
							if($v['date']==$date){
												
				
						$data = file_get_contents('../jsonLogs/'.$date.'.json');
						$Logs = json_decode($data, true);

						foreach ($Logs as $key => $value) {
							foreach ($value as $k => $v) {

							
								if(empty($v['TimeOut'])){
									$sql ="SELECT * FROM tbl_student WHERE student_id='$k'";
									$query = $con->query($sql);
									$fetch = $query->fetch_assoc();

									// $charat = substr($fetch['mname'], 0, 1);
									// $name= $fetch['lname'].', '.$fetch['fname'].' '.$charat.'.';

									// $count++;
				?>
				
				<tr >
					<td class="text-center"><?php echo $k ?></td>
				
					<td class="text-center"><?php echo $v['TimeIn'];?></td>
					<td class="text-center"><?php echo $v['type'];?></td>
					<td class="text-center"><?php echo $v['Date']?></td>
				</tr>
					<?php 	 
						}
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
	<!-- </div>
	</div> -->