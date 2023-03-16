<!-- jQuery -->
<script src="../js/jquery-3.5.1.min.js"></script>
		
<!-- Bootstrap Core JS -->
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<!-- Slimscroll JS -->
<script src="../js/jquery.slimscroll.min.js"></script>

<!-- Select2 JS -->
<script src="../js/select2.min.js"></script>


<!-- Datetimepicker JS -->
<script src="../js/moment.min.js"></script>
<script src="../js/bootstrap-datetimepicker.min.js"></script>

<!-- Custom JS -->
<script src="../js/app.js"></script>
<script src="../js/app/app.js"></script>
<script src="../js/bootstrap/bootstrap.bundle.min.js"></script>

<script src = "../js/jquery.dataTables.js"></script>



<script type = "text/javascript">
	$(document).ready(function() {
		$('#table').DataTable();
		$('#table1').DataTable();
		$('#table2').DataTable();
	} );
</script>

<script type = "text/javascript">
	var checkboxes = document.querySelectorAll("input[type = 'checkbox']");
	
	function checkAll(myCheckbox){
		if(myCheckbox.checked == true){
			checkboxes.forEach(function(checkbox){
				checkbox.checked = true;
			});
		}else{
			checkboxes.forEach(function(checkbox){
				checkbox.checked = false;
			});
		}
	}
</script>
