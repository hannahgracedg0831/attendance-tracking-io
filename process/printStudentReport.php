<html>
    <head>		
    <style>				
            .container {
                width:100%;
                margin:auto;
            } 
            .table {
                width: 100%;
                margin-bottom: auto;
            }
            .table.table-striped td,th,tr:nth-of-type(odd) {
                    background-color: rgba(61, 96, 150, 0.21) !important;
                    -webkit-print-color-adjust: exact; 
                }
            @media print {    
                .table.table-striped td,th,tr:nth-of-type(odd) {
                    background-color: rgba(61, 96, 150, 0.21) !important;
                    -webkit-print-color-adjust: exact; 
                }
                .btn {
                    display: none;
                }
            }
		</style>

        <script>
        function printPage() {
            window.print();
        }
        </script>	
</head>
<body>
	<div class="container">
		<div id="header"><br/>

        <div class="btn">
            <button type="submit" id="print" onclick="printPage()">Print</button>
            <a href="../admin/main-ReportStudent.php"><button>Back</button></a>
        </div>
        <hr>

        <div class="div">
            <div class="col">
                <h2>Student Report Data</h2>
            </div>
            <div class="col">
                <b style="color:red;">Date Prepared:</b>
		        <?php include('../current_date.php'); ?>
            </div>
        </div><br/>

        <?php
			// include ('../connection.php');
			// $query = mysqli_query($con, "SELECT * FROM tbl_student") or die(mysqli_error($con));
        ?>

			<table id="table" class="table table-border">
				<thead>
                    <tr>
                        <th>STUDENT ID</th>
                        <th>STUDENT NAME</th>
                        <th>TIME IN</th>
                        <th>GUARD NAME</th>
                        <th>TIME OUT</th>
                        <th>GUARD NAME</th>
                        <th>DATE</th>
                    </tr>
				</thead>   
				<tbody>
        <?php
			// while($row = mysqli_fetch_array($query)){
			//     $name = $row['lname'].", ".$row['fname']." ".$row['mname'];
            //     $address = $row['barangay'].", ".$row['city']." ".$row['province'];
        ?>
                    <!-- <tr>
                        <td style="text-align:center; font-size: 15px;"></td>
                        <td style="text-align:center; font-size: 15px;"></td>
                        <td style="text-align:center; font-size: 15px;"></td>
                        <td style="text-align:center; font-size: 15px;"></td>
                        <td style="text-align:center; font-size: 15px;"></td>
                        <td style="text-align:center; font-size: 15px;"></td>
                        <td style="text-align:center; font-size: 15px;"></td>
                    </tr> -->
                    <!-- <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr> -->
                    <?php
                    if(isset($_POST['submitprint'])){
		require_once '../connection.php';
		date_default_timezone_set("Singapore");
		$date=$_POST['date'];
	
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
									
						if($v['type']=='student'){
							$sql ="SELECT * FROM tbl_student WHERE student_id='$k'";
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
							?>
							<tr>
							<td class="text-center"><?php echo $fetch['student_id']?></td>
						<td class="text-center"><?php echo $name;?></td>
				<?php
			
						?>
	<td class="text-center"><?php echo $object->TimeIn?></td>
	<td class="text-center"><?php echo $guardIn?></td>
	<td class="text-center"><?php echo $object->TimeOut?></td>
	<td class="text-center"><?php echo $guardOut?></td>
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
            <br/><br/>
            <hr>
		</div>
	</div>
</body>
</html>