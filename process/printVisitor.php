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
            <a href="../admin/main-facultystaff.php"><button>Back</button></a>
        </div>
        <hr>

        <div class="div">
            <div class="col">
                <h2>Visitor Data</h2>
            </div>
            <div class="col">
                <b style="color:red;">Date Prepared:</b>
		        <?php include('../current_date.php'); ?>
            </div>
        </div><br/>

        <?php
			include ('../connection.php');
			$query = mysqli_query($con, "SELECT * FROM tbl_visitor") or die(mysqli_error($con));
        ?>

			<table id="table" class="table table-border">
				<thead>
                    <tr>
                        <th>VISITOR ID</th>
                        <th>NAME</th>
                        <th>SEX</th>
                        <th>DATE OF BIRTH</th>
                        <th>ADDRESS</th>
                        <th>CONTACT</th>
                        <th>EMAIL</th>
                    </tr>
				</thead>   
				<tbody>
        <?php
			while($row = mysqli_fetch_array($query)){
			    $name = $row['lname'].", ".$row['fname']." ".$row['mname'];
                $address = $row['barangay'].", ".$row['city']." ".$row['province'];
        ?>
                    <tr>
                        <td style="text-align:center; font-size: 15px;"><?php echo $row['visitor_id']; ?></td>
                        <td style="text-align:center; font-size: 15px;"><?php echo $name; ?></td>
                        <td style="text-align:center; font-size: 15px;"><?php echo $row['sex']; ?></td>
                        <td style="text-align:center; font-size: 15px;"><?php echo $row['dob']; ?></td>
                        <td style="text-align:center; font-size: 15px;"><?php echo $address; ?></td>
                        <td style="text-align:center; font-size: 15px;"><?php echo $row['contact']; ?></td>
                        <td style="text-align:center; font-size: 15px;"><?php echo $row['email']; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
							
		<?php }	?>
				</tbody> 
			</table> 
            <br/><br/>
            <hr>
		</div>
	</div>
</body>
</html>