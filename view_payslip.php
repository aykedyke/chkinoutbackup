<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}

$employee_id = $_GET['id'];
$from = $_GET['i_d'];
$to = $_GET['f_d'];

?>


<?php include('header.php'); ?>

<body>
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Payroll</h5>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
    <!-- Main content wrapper -->
    <div class="wrapper">
		<br>
		<?php
			$no_days = mysql_query("SELECT DISTINCT date FROM tbl_logs WHERE date BETWEEN '$from' and '$to'");
			$count_days = mysql_num_rows($no_days);
	   ?>
			<h3>Cut Off Period : <?php echo date("F d, Y", strtotime($from)); ?> To <?php echo date("F d, Y", strtotime($to)); ?></h3><br/>
			<h3>Number of Working days : <?php echo $count_days ?></h3>
	   <div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Payroll</h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead >
            <tr>
				<th style = "background:#4c4c4c">Employee ID</th>
				<th style = "background:#4c4c4c">Fullname</th>
				<th style = "background:#4c4c4c">Absent/s</th>
				<th style = "background:#4c4c4c">Total Minutes of Late</th>
				<th style = "background:#4c4c4c">Basic Pay</th>
				<th style = "background:#4c4c4c">Total Deduction</th>
				<th style = "background:#4c4c4c">Total Benefits</th>
				<th style = "background:#4c4c4c">Cutoff Grosspay</th>
            </tr>
            </thead>
            <tbody>
          
			<?php
				$qry_log = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$employee_id'");
				$row_log = mysql_fetch_array($qry_log);
				$employee_id = $row_log['employee_id'];
				$id = $row_log['id'];
				$fullname = $row_log['fullname'];
				$qry_absent = mysql_query("SELECT DISTINCT date,emp_id FROM tbl_logs WHERE date BETWEEN '$from' and '$to' AND emp_id = '$employee_id'");
				$count_present = mysql_num_rows($qry_absent);
				$no_days = mysql_query("SELECT DISTINCT date,emp_id FROM tbl_logs WHERE date BETWEEN '$from' and '$to' AND emp_id = '$employee_id'");
				$total_min_late = 0;
				while($row_days = mysql_fetch_array($no_days)){
					$days_date = $row_days['date'];
					$days_emp_id = $row_days['emp_id'];
					$qry_timein = mysql_query("SELECT * FROM tbl_logs WHERE date = '$days_date' AND emp_id = '$days_emp_id' AND status = 'Attendance' AND action = 'In' ORDER BY log_id ASC");
					$row_timein = mysql_fetch_array($qry_timein);
						$attendance_in = $row_timein['time'];
						$startin = strtotime('11:00 am'); 
						$strattendancetime = strtotime($attendance_in);
						if($strattendancetime > $startin){
							$min_late =  ($strattendancetime - $startin) / 60;
						}
						else{
							$min_late = 0;
						}
						$total_min_late = $total_min_late + $min_late;
						
				}
				$count_absent = $count_days - $count_present;
				
				$emp_info_qry = mysql_query("SELECT * FROM tbl_employee_info WHERE employee_id = '$employee_id'");
				$count_info = mysql_num_rows($emp_info_qry);
				$row_info = mysql_fetch_array($emp_info_qry);
				
				if($count_info == 0){
					$basic_pay = 0;
				}else{
					$basic_pay = $row_info['basic_salary'];
				}
				// PER DAY OF Employee //
					$perday_pay = $basic_pay / 22;
					$absent_deduction = $perday_pay * $count_absent;
				// PER HOUR of Employee //
					$perhour_pay = $perday_pay / 8;
				// PER MINUTE of Employee //
					$perminute_pay = $perhour_pay / 60;
					$late_deduction = $perminute_pay * $total_min_late;
					
				// OTHER DEDUCTIONS //
					$basic_tax = $row_info['basic_tax'];
					$basic_tax = $basic_tax / 2;
					$qry_deduction = mysql_query("SELECT SUM(deduction_price) AS total_deduction FROM tbl_deduction WHERE emp_id = '$id'");
					$row_deduction = mysql_fetch_array($qry_deduction);
					$other_deduction_total = $row_deduction['total_deduction'];
					$new_other_deduction_total = $other_deduction_total / 2;
				// END OTHER DEDUCTIONS //
				$total_deduction = $late_deduction + $absent_deduction + $new_other_deduction_total + $basic_tax;
				$cutoff_pay = $basic_pay / 2;
				$gross_pay = $cutoff_pay - $total_deduction;
			?>
					<tr>
						<td><center><?php echo $employee_id; ?></center> </td>
						<td><center><?php echo $fullname; ?></center> </td>
						<td><center><?php echo $count_absent; ?></center> </td>
						<td><center><?php echo $total_min_late; ?></center> </td>
						<td><center><?php echo number_format($basic_pay); ?></center> </td>
						<td><center><?php echo number_format(round($total_deduction)); ?></center> </td>
						<td><center>0</center> </td>
						<td><center><?php echo number_format(round($gross_pay)); ?></center> </td>
					</tr>
            </tbody>
            </table>
			
        </div>
		<br>
		<h3>Deduction Breakdown :</h3>
		<br>
		<b>Absent Deduction : PHP <?php echo number_format(round($absent_deduction)); ?> .00 </b> <br/>
		<b>Late Deduction : PHP <?php echo number_format(round($late_deduction)); ?> .00 </b> <br/>
		<?php
			$qry_deduction = mysql_query("SELECT * FROM tbl_deduction WHERE emp_id = '$id'");
			while($row_deduction = mysql_fetch_array($qry_deduction)){
		?>
		<b><?php echo $row_deduction['deduction_name']; ?> : PHP <?php echo number_format(round($row_deduction['deduction_price'] / 2)); ?> .00 </b> <br/>
		<?php
			}
		?>
		<b>Tax Deduction : PHP <?php echo number_format(round($basic_tax)); ?> .00 </b> <br/>
		<br>
		
		<form action = "tcpdf/payslip/pdf_payslip.php" method = "post">
			<input type = "hidden" name = "employee_id" value = "<?php echo $employee_id; ?>" />
			<input type = "hidden" name = "from" value = "<?php echo $from; ?>" />
			<input type = "hidden" name = "to" value = "<?php echo $to; ?>" />
			<input type = "submit" name = "submit" value = "View PDF Payslip" />
		</form>
		
		<!--<div>
			<button id="btnExport">Export to excel</button>
        </div>-->
		
		
    <br>
    </div>
    
    <!-- Footer line -->
    <div id="footer">
    </div>

</div>

<div class="clear"></div>

</body>
</html>