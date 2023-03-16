<div id="profile_info" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">

							<h5 class="modal-title">Profile Information</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
						<form action="../../process/admin-changeAccount.php" method="post" enctype="multipart/form-data" autocomplete="off">

	<!-- SELECT PROFILE -->
			<?php 	include('../connection.php');
            
				$select_sql = "SELECT * FROM tbl_staff WHERE Position ='Admin'";
				$select_result = mysqli_query($con, $select_sql);
				if (mysqli_num_rows($select_result) > 0) {
					while ($select_row = mysqli_fetch_assoc($select_result)) 
					{
					$staffId = $select_row['staff_id'];
					$first = $select_row['fname'];
					$middle = $select_row['mname'];
					$last = $select_row['lname'];
					$contact = $select_row['contact'];
					$email = $select_row['email'];
					$barangay = $select_row['barangay'];
					$city = $select_row['city'];
					$province = $select_row['province'];

					$name = $first . ' ' . $middle . '. ' . $last;
					$address = $barangay . ', ' . $city . '. ' . $province;
					}
				}
			?>


								<div class="row">
									<div class="col-md-12">
									<div class="alert alert-info">
										<i class="fa fa-info-circle"></i>&nbsp; 
											<strong>REMINDER |</strong> &nbsp; Changes will be applied on your next login.
									</div>
										<div class="row">
											<div class="col-md-6">
													<label>Profile</label><br>
													<input type="file" name="photo" class="form-group" value="">
											</div>
											<div class="col-md-6">
											<div class="form-group">
													<label>Account Type</label>
													<input type="text" class="form-control" readonly="" value="<?php echo $staffId; ?>">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" class="form-control" name="fname" value="<?php echo $first; ?>">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>Middle Name</label>
													<input type="text" class="form-control" name="mname" value="<?php echo $middle; ?>">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" class="form-control" name="lname" value="<?php echo $last; ?>">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>Phone</label>
													<input type="text" class="form-control" name="contact" value="<?php echo $contact; ?>">
												</div>
											</div>
											
											<div class="col-md-8">
												<div class="form-group">
													<label>Email</label>
													<input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="submit-section">
									<button class="btn btn-primary submit-btn" name="update_data">Update Profile</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>