<!-- ##### Student Time ##### -->
<!-- IN Student Filter Data Modal -->
<div id="timeIN" class="modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		
	<?php 
	// echo $date;
	 if(!empty($date)){
		// echo $date;
		 ?>
			<form method="POST" action="#" autocomplete="off"> 
		<div class="modal-content">
	   
				<div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
					<h3 class="modal-title"><font color="white"><i class="fa fa-calendar"></i>&nbsp;Filter Data by Time IN</font></h3>
				</div>
				<div class="modal-body">
					<div class="col-md-12">
						<div class="row">
							<div class="col">
								<div class="form-group">
									<input type="hidden" name="date" value=<?php echo $date?>>
									<input type="hidden" name="TIorTO" value="TimeIn">
									<label>Time From</label>
									<input type="time" name="from"  class="form-control" required/>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label>Time to</label>
									<input type="time" name="to"  class="form-control" required/>
								</div>
							</div>
						</div>
					
				<div style="clear:both;"></div>

				<div class="modal-footer">
					<button name="searchTime" type='submit' class="btn btn-warning">Search</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
					</div>
				</div>
				</div>
			</form>
		
		<?php
	 } else{
		 ?>
			<div class="modal-content">
			<form method="POST" action="#">    
				<div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
					<h3 class="modal-title"><font color="white"><i class="fa fa-calendar"></i>&nbsp;Filter Data by Time</font></h3>
				</div>
				<div class="modal-body">

							<center>
							<h2>Please enter the date first.</h2>
							</center>
							
						</div>
				
				<div style="clear:both;"></div>
				<div class="modal-footer">
		
			 <button type="button" class="btn btn-warning" data-dismiss="modal">Okay</button>
				</div>
					</div>
				</div>
			</form> 
			<div> 
				<?php 
				} 
				?>
	</div>
</div>



<!-- /IN Student Filter Data Modal -->

<!-- OUT Student Filter Data Modal -->
<div id="timeOUT" class="modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<?php if(!empty($date)){
			// echo $date;
			?>
	
		<div class="modal-content">
			<form method="POST" action="#">    
				<div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
					<h3 class="modal-title"><font color="white"><i class="fa fa-calendar"></i>&nbsp;Filter Data by Time OUT</font></h3>
				</div>
				<div class="modal-body">
					<div class="col-md-12">
						<div class="row">
							<div class="col">
								<div class="form-group">
									<input type="hidden" name="date" value=<?php $date?>>
									<input type="hidden" name="TIorTO" value="TimeOut">
									<label>Time From</label>
									<input type="time" name="from"  class="form-control" required/>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label>Time to</label>
									<input type="time" name="to"  class="form-control" required/>
								</div>
							</div>
						</div>
				
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="searchTime" type='submit' class="btn btn-warning">Search</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
					</div>
				</div>
			</form>
		</div>
		<?php } else{?>
			<div class="modal-content">
			<form method="POST" action="#">    
				<div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
					<h3 class="modal-title"><font color="white"><i class="fa fa-calendar"></i>&nbsp;Filter Data by Time</font></h3>
				</div>
				<div class="modal-body">
				
							<center>
							<h2>Please enter the date first.</h2>
							</center>
							
						</div>
				
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<!-- <button name="searchTime" type="submit"class="btn btn-warning">Oka</button> -->
					<button type="button" class="btn btn-warning" data-dismiss="modal">Okay</button>
				</div>
					</div>
				</div>
			</form>
			<div>
				<?php } 
				?>
	</div>
</div>
<!-- /OUT Student Filter Data Modal -->
