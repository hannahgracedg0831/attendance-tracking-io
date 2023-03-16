<!-- Modal -->
<div id="newStudent" class="modal fade" role="dialog">
							<<div class="modal-dialog modal-dialog-centered modal-lg" role="document">

								<div class="modal-content">
								<form method="POST" action="../process/add-student.php" autocomplete="off">    
									<div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
										<h3 class="modal-title"><font color="white"><i class="fa fa-user-plus"></i>&nbsp;New Student</font></h3>
									</div>
									<div class="modal-body">
										<div class="col-md-12">
										<div class="form-group">
											<label>Student ID</label>
											<input type="text" name="student_id"  class="form-control" required/>
										</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label>Lastname</label>
												<input type="text" name="lname"  class="form-control" required/>
											</div>
										</div>
										<div class="col">
											<div class="form-group">
												<label>Firstname</label>
												<input type="text" name="fname"  class="form-control" required/>
											</div>
										</div>
										<div class="col">
											<div class="form-group">
												<label>Middlename</label>
												<input type="text" name="mname"  class="form-control" required/>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label>Course</label>
												<input type="text" name="course"  class="form-control" required/>
											</div>
										</div>
										<div class="col">
											<div class="form-group">
												<label>Year & Section</label>
												<input type="text" name="year_section"  class="form-control" required/>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label>Email</label>
												<input type="email" name="email"  class="form-control" required/>
											</div>
										</div>
										<div class="col">
											<div class="form-group">
												<label>Contact</label>
												<input type="number" name="contact" minlength="11" maxlength="11" onkeypress="return /[0-9]/i.test(event.key)"  class="form-control" required/>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label>Date of Birth</label>
												<input type="date" name="dob"  class="form-control" required/>
											</div>
										</div>
										<div class="col">
											<div class="form-group">
												<label>Sex</label>
												<select class="form-control" name="sex" required>
													<option selected disabled value="">&larr; Select &rarr;</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group">
												<label>Barangay</label>
												<input type="text" name="barangay"  class="form-control" required/>
											</div>
										</div>
										<div class="col">
											<div class="form-group">
												<label>City/Municipality</label>
												<input type="text" name="city"  class="form-control" required/>
											</div>
										</div>
										<div class="col">
											<div class="form-group">
												<label>Province</label>
												<input type="text" name="province"  class="form-control" required/>
											</div>
										</div>
									</div>
									
									<div style="clear:both;"></div>
									<div class="modal-footer">
										<button name="saveStudent" class="btn btn-warning">Save</button>
										<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

							</div>
							</div>
							</div>
					</div>
						</div>
					</div>
                    <!-- / Modal -->