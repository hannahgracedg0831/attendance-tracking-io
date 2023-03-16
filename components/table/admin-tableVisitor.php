<table id = "table" class="table table-bordered">
				<thead>
					<tr>
						<!-- <th class="text-center">
							<input type="checkbox" id="selectAll" onchange="checkAll(this)">&nbsp;Select All
						</th> -->
						<th class="text-center">Visitor ID</th>
						<th class="text-center">Facility</th>
						<!-- <th class="text-center">Address</th> -->
						<!-- <th class="text-center">Contact</th> -->
						<!-- <th class="text-center">Email</th> -->
						<th class="text-center">Action</th>
                        
					</tr>
				</thead>
				<tbody>
				<?php
							require_once '../connection.php';
								$query = mysqli_query($con, "SELECT * FROM tbl_visitor") or die(mysqli_error($con));

								while($fetch = mysqli_fetch_array($query)){
									$charat = substr($fetch['mname'], 0, 1);
								$name= $fetch['lname'].', '.$fetch['fname'].' '.$charat.'.';

                        ?>
                        
						<tr>
							<td class="text-center"><?php echo $fetch['visitor_id'];?></td>
							<td class="text-center"><?php echo $name;?></td>

							<td class="text-center">
								<div class="row">
									<div class="col">
									<a class="btn btn-danger" data-toggle="modal" data-target="#delete_modal<?php echo $fetch['visitor_id']?>"><i class="fa fa-trash-o"></i></a>
									</div>
								</div>
							</td>
						</tr>
						<?php include '../components/modal/admin-deleteVisitor.php'; ?>
					<?php  }  ?>
				</tbody>
			</table>
			