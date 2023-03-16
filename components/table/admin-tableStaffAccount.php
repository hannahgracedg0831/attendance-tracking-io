<table id = "table" class="table table-bordered">
				<thead>
					<tr>
						<!-- <th class="text-center">
							<input type="checkbox" id="selectAll" onchange="checkAll(this)">&nbsp;Select All
						</th> -->
						<th class="text-center">Staff ID</th>
						<th class="text-center">Username</th>
						<th class="text-center">Status</th>
						<th class="text-center">Action</th>
                        
					</tr>
				</thead>
				<tbody>
				<?php
							require_once '../connection.php';

								$query = mysqli_query($con, "SELECT * FROM tbl_user") or die(mysqli_error($con));

								while($fetch = mysqli_fetch_array($query)){
									$id=$fetch['user_id'];
									$query1 = mysqli_query($con, "SELECT * FROM tbl_staff WHERE staff_id='$id'");
									$fetch1 = mysqli_fetch_array($query1);
									if($fetch1['position'] != 'Admin'){;
									$statusAcc = "";

									if($fetch['status'] == 'default'){
										$statusAcc = '<div class="btn btn-success btn-sm">default</div>';
									}else if($fetch['status'] == 'active'){
										$statusAcc = '<div class="btn btn-warning btn-sm">active</div>';
									}else if($fetch['status'] == 'disabled'){
										$statusAcc = '<div class="btn btn-danger btn-sm">disabled</div>';
									}
                        ?>
                        
						<tr>
							<td class="text-center"><?php echo $fetch['user_id'];?></td>
							<td class="text-center"><?php echo $fetch['username'];?></td>
							<td class="text-center"><?php echo $statusAcc;?></td>

							<td class="text-center">
								<!-- <a class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#change_modal<?php echo $fetch['user_id']?>">Change Status</a> -->
								<a class="btn btn-warning" data-toggle="modal" data-target="#change_modal<?php echo $fetch['user_id']?>"><i class="fa fa-pencil"></i></a>
								<a class="btn btn-danger" data-toggle="modal" data-target="#delete_modal<?php echo $fetch['user_id']?>"><i class="fa fa-trash-o"></i></a>								
							</td>
						</tr>
						
						<!-- Change Status File -->
						<div class="modal fade" id="change_modal<?php echo $fetch['user_id']?>"  aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered">
							<form method="POST" action="../process/statusAccount.php" autocomplete="off">
								<div class="modal-content">
									
									<div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
										<h3 class="modal-title"><font color="white"><i class="fa fa-user"></i>&nbsp;Change Status</font></h3>
									</div>
									<div class="modal-body">
										<div class="col-md-12">
										<input type="hidden" name="user_id" value="<?php echo $fetch['user_id']?>" class="form-control"/>

											<div class="form-group">
												<select class="form-control" name="status" required>
													<option selected disabled value="" required>&larr; Select &rarr;</option>
													<option value="active">Active</option>
													<option value="disabled">Disabled</option>
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


						<?php include '../components/modal/admin-deleteStaffAccount.php'; ?>
					<?php  } } ?>
				</tbody>
			</table>