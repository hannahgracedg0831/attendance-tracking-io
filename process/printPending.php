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
            <a href="../admin/main-pendingQR.php"><button>Back</button></a>
        </div>
        <hr>

        <div class="div">
            <div class="col">
                <h2>Pending Data</h2>
            </div>
            <div class="col">
                <b style="color:red;">Date Prepared:</b>
		        <?php include('../current_date.php'); ?>
            </div>
        </div><br/>

        <?php
			include ('../connection.php');
			// $query = mysqli_query($con, "SELECT * FROM tbl_student") or die(mysqli_error($con));
        ?>

			<table id="table" class="table table-border">
				<thead>
                    <tr>
                        <th>ID</th>
                        <!-- <th>NAME</th> -->
                        <th>TIME IN</th>
                        <th>POSITION</th>
                        <th>DATE</th>
                    </tr>
				</thead>   
				<tbody>
                <?php
				   if(isset($_POST['submitprint'])){
                    require_once '../connection.php';
                    date_default_timezone_set("Singapore");
                        $date = $_POST['date'];
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
                   else{
				require_once '../connection.php';
                date_default_timezone_set("Singapore");
					$date = date('Y-m-d');
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
            <br/><br/>
            <hr>
		</div>
	</div>
</body>
</html>