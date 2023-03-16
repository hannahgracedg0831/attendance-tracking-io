<table id = "table" class="table table-bordered">
				<thead>
					<tr>
						<!-- <th class="text-center">
							<input type="checkbox" id="selectAll" onchange="checkAll(this)">&nbsp;Select All
						</th> -->
						<th class="text-center">Student ID</th>
						<th class="text-center">Name</th>
						<th class="text-center">Course</th>
				
						<th class="text-center">Status</th>
						<th class="text-center">Action</th>
                        
					</tr>
				</thead>
				<tbody>
					<?php
							require_once '../connection.php';
								$query = mysqli_query($con, "SELECT * FROM tbl_students") or die(mysqli_error($con));

								while($fetch = mysqli_fetch_array($query)){
									// $image="../upload/".$fetch['photo'];

									$charat = substr($fetch['middle_name'], 0, 1);
								$name= $fetch['last_name'].', '.$fetch['first_name'].' '.$charat.'.';

								$status = "";

									if($fetch['status'] == 0){
										$status = '<div class="btn btn-success btn-sm">active</div>';
									}else if($fetch['status'] == 1){
										$status = '<div class="btn btn-danger btn-sm">suspended</div>';
									}

                        ?>
                        
						<tr>
							<td class="text-center"><?php echo $fetch['student_no'];?></td>
							<td class="text-center"><?php echo $name;?></td>
							<td class="text-center"><?php echo $fetch['course'];?></td>
						
							<td class="text-center"><?php echo $status;?></td>
							<td class="text-center">
								<div class="row">
									<div class="col">
										<a class="btn btn-warning" data-toggle="modal" data-target="#edit_modal<?php echo $fetch['student_no']?>"><i class="fa fa-pencil"></i></a>
									</div>
								</div>	
								
							</td>
						</tr>

						<!-- Change Status File -->
						<div class="modal fade" id="edit_modal<?php echo $fetch['student_no']?>"  aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered">
							<form method="POST" action="../process/statusStudent.php" autocomplete="off">
								<div class="modal-content">
									
									<div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
										<h3 class="modal-title"><font color="white"><i class="fa fa-user"></i>&nbsp;Change Status</font></h3>
									</div>
									<div class="modal-body">
										<div class="col-md-12">
										<input type="hidden" name="student_no" value="<?php echo $fetch['student_no']?>" class="form-control"/>

											<div class="form-group">
												<select class="form-control" name="status" required>
													<option selected disabled value="" required>&larr; Select &rarr;</option>
													<option value="0">Active</option>
													<option value="1">Suspended</option>
												</select>					
											</div>
										</div>
									</div>
									<div style="clear:both;"></div>
									<div class="modal-footer">
										<button  type="submit" class="btn btn-warning" name="change">Update</button>
										<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									</div>
									
								</div>
								</form>
							</div>
						</div>
						<!-- /Change Status File -->
						<?php include '../components/modal/admin-deleteStudent.php'; ?>
			
					<?php  }  ?>
				</tbody>
			</table>
		