
<div class="modal fade"id="print_modal"  aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
	<form method="POST" action="../process/printStudentReport.php" autocomplete="off">
		<div class="modal-content">
			
			<div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
				<h3 class="modal-title"><font color="white"><i class="fa fa-file"></i>&nbsp;PRINT</font></h3>
			</div>
			<div class="modal-body">
				<center><h4>Do you want to print?</h4></center>
                
				<input type="hidden" name='date' value="<?php echo $date ?>"/>
			</div>
			<div class="modal-footer">
				<button  type='submit' class="btn btn-warning" name="submitprint">Yes</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
			
		</div>
		</form>
	</div>
</div>

<div class="modal fade"id="visitorprint_modal"  aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
	<form method="POST" action="../process/printVisitorReport.php" autocomplete="off">
		<div class="modal-content">
			
			<div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
				<h3 class="modal-title"><font color="white"><i class="fa fa-file"></i>&nbsp;PRINT</font></h3>
			</div>
			<div class="modal-body">
				<center><h4>Do you want to print?</h4></center>
                
				<input type="hidden" name='date' value="<?php echo $date ?>"/>
			</div>
			<div class="modal-footer">
				<button  type='submit' class="btn btn-warning" name="submitprint">Yes</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
			
		</div>
		</form>
	</div>
</div>
<div class="modal fade"id="staffprint_modal"  aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
	<form method="POST" action="../process/printStaffReport.php" autocomplete="off">
		<div class="modal-content">
			
			<div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
				<h3 class="modal-title"><font color="white"><i class="fa fa-file"></i>&nbsp;PRINT</font></h3>
			</div>
			<div class="modal-body">
				<center><h4>Do you want to print?</h4></center>
                
				<input type="hidden" name='date' value="<?php echo $date ?>"/>
			</div>
			<div class="modal-footer">
				<button  type='submit' class="btn btn-warning" name="submitprint">Yes</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
			
		</div>
		</form>
	</div>
</div>



