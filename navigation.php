<ul id="menu" class="nav">
		<?php
			if($_SESSION['id'] == 6){
		?>
			<li class="charts"><a href="overtime.php" title=""><span>Assign OT, UT</span></a></li>
			<li class="charts"><a href="logout.php" title=""><span>Logout</span></a></li>
		<?php
			}else if($_SESSION['id'] == 7){
		?>
			<li class="charts"><a href="approved_leave.php" title=""><span>Approved Leaves</span></a></li>
			<li class="charts"><a href="overtime.php" title=""><span>Assign OT, UT</span></a></li>
			<li class="charts"><a href="logout.php" title=""><span>Logout</span></a></li>
		<?php
			}else{
		?>
		<li class="charts"><a href="index.php" title=""><span>Attendance Log</span></a></li>
		<li class="charts"><a href="overtime-log.php" title=""><span>Overtime Log</span></a></li>
		<li class="charts"><a href="department.php" title=""><span>Department</span></a></li>
		<li class="charts"><a href="view_employee.php" title=""><span>Employee List</span></a></li>
		<!--<li class="charts"><a href="http://tapdashheuristics.com/projects/attendance/employeexls.php" title=""><span>Generate Employee list on xls</span></a></li>-->
		<!--<li class="charts"><a href="assign_supervisor.php" title=""><span>Supervisors</span></a></li>-->
		<li class="charts"><a href="list_registration.php" title=""><span>List of Device Registered</span></a></li>
		<?php
			if($_SESSION['company'] == 3){
				
			}else{
		?>
				<li class="charts"><a href="assign_holiday.php" title=""><span>Assign Holiday</span></a></li>
		<?php
			}
		?>
		<li class="charts"><a href="approved_leave.php" title=""><span>Approved Leaves</span></a></li>
		<li class="charts"><a href="approved_overtime.php" title=""><span>Approved Overtime</span></a></li>
		<li class="charts"><a href="overtime.php" title=""><span>Assign OT, UT</span></a></li>
		<!--<li class="charts"><a href="undertime.php" title=""><span>Assign Undertime</span></a></li>-->
		<!--<li class="charts"><a href="holiday.php" title=""><span>Assign Holiday Work</span></a></li>-->
		<?php
			if($_SESSION['company'] == 3 || ($_SESSION['company'] == 2 && $_SESSION['admin'] == "admin")){
			}else{
		?>
		<li class="charts"><a href="compute_payroll.php" title=""><span>Compute Payroll</span></a></li>
		<li class="charts"><a href="payroll_list.php" title=""><span>Payroll List</span></a></li>
		<li class="charts"><a href="unpublished_payroll_list.php" title=""><span>Unpublished Payroll List</span></a></li>
		<!--<li class="charts"><a href="tcpdf/payslip/pdf_payslip_all.php" target="_blank" title=""><span>View Recent Payslip</span></a></li>
		<li class="charts"><a href="http://tapdashheuristics.com/projects/attendance/payslipxls.php" title=""><span>Recent Payslip on xls</span></a></li>-->
		<?php
			}
		?>
		<!--<li class="charts"><a href="addlog.php" title=""><span>Add Manual Log</span></a></li>-->
		<li class="charts"><a href="settings.php" title=""><span>Admin Settings</span></a></li>
		<li class="charts"><a href="http://tapdashheuristics.com/projects/attendance/checkinout%20usermanual.docx" title=""><span>User Manual</span></a></li>
		<li class="charts"><a href="logout.php" title=""><span>Logout</span></a></li>
		<?php
			}
		?>
</ul>
	 
