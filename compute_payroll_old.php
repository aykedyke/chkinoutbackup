<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}
$x = 0;

if(isset($_POST['view_attendance'])){
	$from = $_POST['from'];
	$to = $_POST['to'];
	
	if(($from != "") && ($to != "")){
		$strfrom = strtotime($from);
		$strto = strtotime($to);
		
		if($strto >= $strfrom){
			$x = 1;
		}else{
			echo "<script>alert('Error, please check your dates!');</script>";
		}
	}
}

if(isset($_POST['update_payslip'])){
	$from = $_POST['from'];
	$to = $_POST['to'];
	mysql_query("INSERT INTO tbl_payslip (from_date,to_date,company_id) VALUES ('$from','$to','".$_SESSION['company']."')");
	
	$onleave_qry = mysql_query("SELECT DISTINCT date FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to'");
	while($row_onleave = mysql_fetch_array($onleave_qry)){
		$each_date = $row_onleave['date'];
		
		$days_leave = mysql_query("SELECT * FROM tbl_leave_days WHERE company_id = '".$_SESSION['company']."' AND date = '$each_date'");
		while($row_days_leave = mysql_fetch_array($days_leave)){
		 $row_days_leave['emp_id'];
		 $row_days_leave['date'];
		 
		 mysql_query("INSERT INTO tbl_logs (emp_id,status,date,company_id) VALUES ('".$row_days_leave['emp_id']."','LEAVE','".$row_days_leave['date']."','".$_SESSION['company']."')");
		}
	}
	
	echo "<script>alert('Payslip Successfully Updated!');</script>";
		echo "<script>location.href='http://tapdashheuristics.com/projects/attendance/tcpdf/payslip/pdf_payslip_all.php';</script>";
}


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
			<form id="validate" name="frmAdd" method = "post" action = "compute_payroll.php" class = "form">
			<fieldset>
					<div class="formRow">
                        <label><b>From : </b></label>
                        <div class="formRight">
							<select style = "width:300px;height:23px;" name = "from">
							  <option value="">Please Select Date</option>
							  <?php
								$date_qry = mysql_query("SELECT DISTINCT date FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' ORDER BY date DESC");
								while($row_date = mysql_fetch_array($date_qry)){
							  ?>
							  <option value="<?php echo $row_date['date']; ?>"><?php echo date("F d, Y", strtotime($row_date['date'])); ?></option>
							  <?php
							  }
							  ?>
							</select>
						</div>
                        <div class="clear"></div>
                    </div>
					<div class="formRow">
                        <label><b>To : </b></label>
                        <div class="formRight">
							<select style = "width:300px;height:23px;" name = "to">
							  <option value="">Please Select Date</option>
							  <?php
								$date_qry = mysql_query("SELECT DISTINCT date FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' ORDER BY date DESC");
								while($row_date = mysql_fetch_array($date_qry)){
							  ?>
							  <option value="<?php echo $row_date['date']; ?>"><?php echo date("F d, Y", strtotime($row_date['date'])); ?></option>
							  <?php
							  }
							  ?>
							</select>
							<input class="blueB" type = "submit" name = "view_attendance" value = "View Payroll" />
						</div>
                        <div class="clear"></div>
                    </div>
			</fieldset>
			</form>
		<br>
		<?php
			if($x == 1){
			$main_date = $_POST['from'];
			$no_days = mysql_query("SELECT DISTINCT date FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to'");
			$count_days = mysql_num_rows($no_days);
	   ?>
			<!--<h3><?php echo date("F d, Y", strtotime($main_date)); ?></h3>-->
			<h3>Cut Off Period : <?php echo date("F d, Y", strtotime($from)); ?> To <?php echo date("F d, Y", strtotime($to)); ?></h3><br/>
			<h3>Number of Working days : <?php echo $count_days ?></h3>
	   <div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Lates and Absences</h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead >
            <tr>
				<th style = "background:#4c4c4c">Employee ID</th>
				<th style = "background:#4c4c4c">Fullname</th>
				<th style = "background:#4c4c4c">Absent/s</th>
				<th style = "background:#4c4c4c">Total Minutes of Late</th>
				<th style = "background:#4c4c4c">Basic Pay</th>
				<th style = "background:#4c4c4c">Total Deduction</th>
				<th style = "background:#4c4c4c">Total Benefits/Allowance</th>
				<th style = "background:#4c4c4c">Cutoff Netpay</th>
				<th style = "background:#4c4c4c">PAYSLIP</th>
            </tr>
            </thead>
            <tbody>
          
			<?php
				$qry_log = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '".$_SESSION['company']."' AND inactive = '0'");
				while($row_log = mysql_fetch_array($qry_log)){
				$employee_id = $row_log['employee_id'];
				$id = $row_log['id'];
				$fullname = $row_log['fullname'];
				$qry_absent = mysql_query("SELECT DISTINCT date,emp_id FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to' AND emp_id = '$employee_id'");
				$count_present = mysql_num_rows($qry_absent);
				$no_days = mysql_query("SELECT DISTINCT date,emp_id FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to' AND emp_id = '$employee_id'");
				$total_min_late = 0;
				while($row_days = mysql_fetch_array($no_days)){
					$days_date = $row_days['date'];
					$days_emp_id = $row_days['emp_id'];
					$qry_timein = mysql_query("SELECT * FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$days_date' AND emp_id = '$days_emp_id' AND status = 'Attendance' AND action = 'In' ORDER BY log_id ASC");
					$row_timein = mysql_fetch_array($qry_timein);
						$attendance_in = $row_timein['time'];
						$startime_qry = mysql_query("SELECT * FROM tbl_timein WHERE company_id = '".$_SESSION['company']."'");
						$row_startime = mysql_fetch_array($startime_qry);
						$start_time = $row_startime['start_time'];
							$startin = strtotime($start_time); 
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
				
				$emp_allowance_qry = mysql_query("SELECT * FROM tbl_allowance WHERE emp_id = '$employee_id'");
				$count_allowance = mysql_num_rows($emp_allowance_qry);
				$row_allowance = mysql_fetch_array($emp_allowance_qry);
				
				$emp_sum_allowance_qry = mysql_query("SELECT SUM(allowance_price) FROM tbl_allowance WHERE emp_id = '$employee_id'");
				$count_sum_allowance = mysql_num_rows($emp_sum_allowance_qry);
				$row_sum_allowance = mysql_fetch_array($emp_sum_allowance_qry);
				
				if($count_info == 0){
					$basic_pay = 0;
				}else{
					$basic_pay = $row_info['basic_salary'];
				}
				
				if($count_allowance == 0){
					$basic_allowance = 0;
				}else{
					$basic_allowance = $row_sum_allowance['SUM(allowance_price)'];
					$basic_allowance = $basic_allowance / 2;
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
				$gross_pay = $cutoff_pay - $total_deduction + $basic_allowance;
			?>
					<tr>
						<td><center><?php echo $employee_id; ?></center> </td>
						<td><center><?php echo $fullname; ?></center> </td>
						<td><center><?php echo $count_absent; ?></center> </td>
						<td><center><?php echo round($total_min_late); ?></center> </td>
						<td><center><?php echo number_format($cutoff_pay); ?></center> </td>
						<td><center><?php echo number_format(round($total_deduction)); ?></center> </td>
						<td><center><?php echo $basic_allowance; ?></center> </td>
						<td><center><?php echo number_format(round($gross_pay)); ?></center> </td>
						<td><center><a href = "view_payslip.php?id=<?php echo $employee_id; ?>&i_d=<?php echo $from; ?>&f_d=<?php echo $to; ?>">View Payslip</a></center> </td>
					</tr>
			<?php
				}
			?>
			
           
            </tbody>
            </table>
			
        </div>
		<br>
		<div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Leave(s) from this Cutoff</h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead >
            <tr>
				<th style = "background:#4c4c4c">Employee ID</th>
				<th style = "background:#4c4c4c">Fullname</th>
				<th style = "background:#4c4c4c">Date</th>
            </tr>
            </thead>
            <tbody>
          
			<?php
				$onleave_qry = mysql_query("SELECT DISTINCT date FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to'");
				while($row_onleave = mysql_fetch_array($onleave_qry)){
				$each_date = $row_onleave['date'];
				$days_leave = mysql_query("SELECT * FROM tbl_leave_days WHERE company_id = '".$_SESSION['company']."' AND date = '$each_date'");
				while($row_days_leave = mysql_fetch_array($days_leave)){
					$fullname_qry = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '".$_SESSION['company']."' AND employee_id = '".$row_days_leave['emp_id']."'");
					$row_fullname = mysql_fetch_array($fullname_qry);
			?>
					<tr>
						<td><center><?php echo $row_days_leave['emp_id']; ?></center> </td>
						<td><center><?php echo $row_fullname['fullname']; ?></center> </td>
						<td><center><?php echo $row_days_leave['date']; ?></center> </td>
					</tr>
			<?php
				}
				}
			?>
			
           
            </tbody>
            </table>
			
        </div>
		<br>
		<form action = "" method = "post">
			<input type = "hidden" name = "from" value = "<?php echo $from; ?>" />
			<input type = "hidden" name = "to" value = "<?php echo $to; ?>" />
			<input onclick="return confirm('Are you sure you want to update payslip?');" type = "submit" name = "update_payslip" value = "Update Payslip" />
		</form>
		<?php
			}
		?>
		<br>
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