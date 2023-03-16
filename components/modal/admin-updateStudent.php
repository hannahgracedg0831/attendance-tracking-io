<!-- Update File -->
<div class="modal fade" id="edit_modal<?php echo $fetch['student_id']?>" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
					<div class="modal-content">
						<form method="POST" action="../process/admin-update.php" autocomplete="off">	
							<div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
								<h3 class="modal-title"><font color="white"><i class="fa fa-pencil"></i>&nbsp;Update Student</font></h3>
							</div>
							<div class="modal-body">
								<div class="col-md-12">
								<center>
									<div class="form-group">
										<input type="hidden" name="student_id" value="<?php echo $fetch['student_id']?>" class="form-control"/>
										<label>Student ID</label>
										<input readonly="" name="student_id" value="<?php echo $fetch['student_id']?>"  class="form-control" required/>
									</div>
								</center>
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label>Lastname</label>
											<input type="text" name="lname" value="<?php echo $fetch['lname']?>" class="form-control" required/>
										</div>
									</div>
									<div class="col">
										<div class="form-group">
											<label>Firstname</label>
											<input type="text" name="fname" value="<?php echo $fetch['fname']?>" class="form-control" required/>
										</div>
									</div>
									<div class="col">
										<div class="form-group">
											<label>Middlename</label>
											<input type="text" name="mname" value="<?php echo $fetch['mname']?>" class="form-control" required/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label>Email</label>
											<input type="email" name="email" value="<?php echo $fetch['email']?>" class="form-control" required/>
										</div>
									</div>
									<div class="col">
										<div class="form-group">
											<label>Course</label>
											<input type="text" name="course" value="<?php echo $fetch['course']?>" class="form-control" required/>
										</div>
									</div>
									<div class="col">
										<div class="form-group">
											<label>Year / Section</label>
											<input type="text" name="year_section" value="<?php echo $fetch['year_section']?>" class="form-control" required/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label>Contact</label>
											<input type="number" name="contact" value="<?php echo $fetch['contact']?>" minlength="11" maxlength="11" onkeypress="return /[0-9]/i.test(event.key)"  class="form-control" required/>
										</div>
									</div>
									<div class="col">
										<div class="form-group">
											<label>Date of Birth</label>
											<input type="text" name="dob" value="<?php echo $fetch['dob']?>" class="form-control" required/>
										</div>
									</div>
									<div class="col">
										<div class="form-group">
											<label>Sex</label>
											<input type="text" name="sex" value="<?php echo $fetch['sex']?>" class="form-control" required/>

											<!-- <select class="form-control" name="sex" required>
												<option selected disabled value="">&larr; Select &rarr;</option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
											</select> -->
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label>Barangay</label>
											<input type="text" name="barangay" value="<?php echo $fetch['barangay']?>"  class="form-control" required/>
										</div>
									</div>
									<div class="col">
										<div class="form-group">
											<label>City/Municipality</label>
											<input type="text" name="city" value="<?php echo $fetch['city']?>"  class="form-control" required/>
										</div>
									</div>
									<div class="col">
										<div class="form-group">
											<label>Province</label>
											<input type="text" name="province" value="<?php echo $fetch['province']?>" class="form-control" required/>
										</div>
									</div>
								</div>
								</div>
								<div style="clear:both;"></div>
								<div class="modal-footer">
									<button name="updateStudent" type="submit" class="btn btn-warning" ><span class="glyphicon glyphicon-save"></span> Update</button>
									<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			<!-- /Update File -->