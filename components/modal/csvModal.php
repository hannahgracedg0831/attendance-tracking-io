
<!-- CSV Modal File -->
<div class="modal fade"id="studentcsv_modal"  aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
	<form method="POST" action="../process/admin-exportCSVReportstudent.php" autocomplete="off">
		<div class="modal-content">
			
			<div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
				<h3 class="modal-title"><font color="white"><i class="fa fa-file"></i>&nbsp;CSV</font></h3>
			</div>
			<div class="modal-body">
				<center><h4>Do you want to download?</h4></center>
                
				<input type="hidden" name='date' value="<?php echo $date ?>"/>
			</div>
			<div class="modal-footer">
				<button  type='submit' class="btn btn-warning" name="">Yes</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
			
		</div>
		</form>
	</div>
</div>
<!-- /CSV Modal File -->
<!-- CSV Modal File -->
<div class="modal fade"id="staffcsv_modal"  aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
	<form method="POST" action="../process/admin-exportCSVReportstaff.php" autocomplete="off">
		<div class="modal-content">
			
			<div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
				<h3 class="modal-title"><font color="white"><i class="fa fa-file"></i>&nbsp;CSV</font></h3>
			</div>
			<div class="modal-body">
				<center><h4>Do you want to download?</h4></center>
                
				<input type="hidden" name='date' value="<?php echo $date ?>"/>
			</div>
			<div class="modal-footer">
				<button  type='submit' class="btn btn-warning" name="">Yes</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
			
		</div>
		</form>
	</div>
</div>
<!-- /CSV Modal File -->
<!-- CSV Modal File -->
<div class="modal fade"id="visitorcsv_modal"  aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
	<form method="POST" action="../process/admin-exportCSVReportvisitor.php" autocomplete="off">
		<div class="modal-content">
			
			<div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
				<h3 class="modal-title"><font color="white"><i class="fa fa-file"></i>&nbsp;CSV</font></h3>
			</div>
			<div class="modal-body">
				<center><h4>Do you want to download?</h4></center>
                
				<input type="hidden" name='date' value="<?php echo $date ?>"/>
			</div>
			<div class="modal-footer">
				<button  type='submit' class="btn btn-warning" name="">Yes</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
			
		</div>
		</form>
	</div>
</div>
<!-- /CSV Modal File -->

