<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
			<!-- Dashboard -->
			<li class="menu-title">
					<span>Main</span>
				</li>
				<li><a href="index.php"><i class="fa fa-laptop"></i> <span>Dashboard</span></a></li>
		<hr>
			<!-- Report -->
			<li class="menu-title">
					<span>Report</span>
				</li>
				<li><a href="main-ReportStudent.php"><i class="fa fa-th-large"></i> <span> Student</span></a></li>
				<li><a href="main-ReportStaff.php"><i class="fa fa-th-large"></i> <span> Staff</span></a></li>
				<li><a href="main-ReportVisitor.php"><i class="fa fa-th-large"></i> <span> Visitor</span></a></li>
				<li><a href="main-pendingQR.php"><i class="fa fa-users"></i> <span> Pending&nbsp;<span class="badge badge-pill badge-danger">
				<?php 
						$student = countPend('student');
						$teacher = countPend('teacher');
						// $visitor = countPend('visitor');
						$total = $student + $teacher;

						echo $total;
					?></span></span></a></li>
		<hr>
			<!-- Report -->
			<li class="menu-title">
					<span>List</span>
				</li>
				<li><a href="main-students.php"><i class="fa fa-list"></i> <span> Manage Student</span></a></li>
				<li><a href="main-facultystaff.php"><i class="fa fa-list"></i> <span> Manage Staff</span></a></li>
				<li><a href="main-visitors.php"><i class="fa fa-list"></i> <span> Manage Visitor</span></a></li>
				<li><a href="main-staffAccount.php"><i class="fa fa-users"></i> <span> Manage Staff Account</span></a></li>

		<hr>
			<!-- Report -->
			<li class="menu-title">
					<span>Database</span>
				</li>
				<li><a href="main-backupRestore.php"><i class="fa fa-database"></i> <span> Backup and Restore</span></a></li>
				
			</ul>
		</div>
	</div>
</div>
<!-- /Sidebar -->