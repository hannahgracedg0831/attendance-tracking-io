<!-- Modal -->
<div id="generateQR" class="modal fade" role="dialog">
							<<div class="modal-dialog modal-dialog-centered" role="document">

								<div class="modal-content">
								<form method="POST" action="../process/printGenerateQr.php" autocomplete="off">    
									<div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
										<h3 class="modal-title"><font color="white"><i class="fa fa-qrcode"></i>&nbsp;Generate QR-Code</font></h3>
									</div>
									<div class="modal-body">
                                            <div class="form-group">
                                                <label>School Facility</label>
                                                <select class="form-control" name="facility" required>
                                                        <option selected disabled value="">&larr; Select &rarr;</option>
														<option value="ComLab 1">ComLab 1</option>
														<option value="ComLab 2">ComLab 2</option>
                                                        <option value="CLRC">CLRC</option>
                                                        <option value="Gymnasium">Gymnasium</option>
                                                        <option value="Library">Library</option>
														<option value="Office">Office</option>
                                                        <option value="Registrar">Registrar</option>
														<option value="https://web.facebook.com/NEUSTPAPAYA">eto</option>
                                                    </select>
                                            </div>

											<div class="form-group">
												<label > Quantity</label>
												<input class="form-control" type="number" name="quantity">

											</div>
                                            </div>
									<div style="clear:both;"></div>
									<div class="modal-footer">
										<button name="generate" class="btn btn-warning">Generate</button>
										<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									</div>
									
								
							</form>
						</div>
					</div>
				</div>

					
                    <!-- / Modal -->