<table id = "table" class="table table-bordered">
				<thead>
					<tr>
						<!-- <th class="text-center">
							<input type="checkbox" id="selectAll" onchange="checkAll(this)">&nbsp;Select All
						</th> -->
						<th class="text-center">Staff ID</th>
						<th class="text-center">Name</th>
						<th class="text-center">Position</th>
						<!-- <th class="text-center">Address</th> -->
						<th class="text-center">Contact</th>
						<!-- <th class="text-center">Email</th> -->
						<th class="text-center">Action</th>
                        
					</tr>
				</thead>
				<tbody>
				<?php
							require_once '../connection.php';
							// $query = mysqli_query($con, "SELECT * FROM `tbl_staff`") or die(mysqli_error($con));

								// $sql ="SELECT * FROM tbl_report position='STUDENT'";
                                // $query = $con->query($sql);

								$query = mysqli_query($con, "SELECT * FROM tbl_staff") or die(mysqli_error($con));

								while($fetch = mysqli_fetch_array($query)){
									if($fetch['position'] != "Admin"){

									
									$image="../upload/".$fetch['photo'];
									$charat = substr($fetch['mname'], 0, 1);
									$name=$fetch['lname'].', '.$fetch['fname'].' '.$charat.'.';


                                // while ($fetch = $query->fetch_assoc()){
                        ?>
                        
						<tr class="delete_staff<?php echo $fetch['staff_id'] ?>">
							<td class="text-center"><?php echo $fetch['staff_id'];?></td>
							<td class="text-center"><?php echo $name;?></td>
							<td class="text-center"><?php echo $fetch['position'];?></td>
							<td class="text-center"><?php echo $fetch['contact'];?></td>

							<td class="text-center">
								<div class="row">
									<div class="col">
										<a class="btn btn-warning" data-toggle="modal" data-target="#edit_modal<?php echo $fetch['staff_id']?>"><i class="fa fa-pencil"></i></a>
										<a class="btn btn-danger" data-toggle="modal" data-target="#delete_modal<?php echo $fetch['staff_id']?>"><i class="fa fa-trash-o"></i></a>
										<a class="btn btn-white" href="id.php?id=<?php echo $fetch['staff_id']?>"><i class="fa fa-id-card"></i></a>
									</div>
								</div>	
								
							</td>
						</tr>
						<?php include '../components/modal/admin-deleteFacultyStaff.php'; ?>
			<?php include '../components/modal/admin-updateFacultyStaff.php'; ?>
					<?php  } 
					} ?>
				</tbody>
			</table>