
<!-- Delete File -->
<div class="modal fade"id="#"  aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
	<form method="POST" action="#" autocomplete="off">
		<div class="modal-content">
			
			<div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
				<h3 class="modal-title"><font color="white"><i class="fa fa-trash"></i>&nbsp;Delete Student Report</font></h3>
			</div>
			<div class="modal-body">
				<center><h4>Are you sure you want to delete?</h4></center>
				<input type="hidden" name='' value=<?php echo $fetch['']?>>
			</div>
			<div class="modal-footer">
				<button  type='submit' class="btn btn-warning" name="">Yes</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
			
		</div>
		</form>
	</div>
</div>
<!-- /Delete File -->

