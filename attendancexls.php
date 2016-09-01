<?php

ob_start();
session_start();
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');

}else{

$from = $_GET['from'];
$to = $_GET['to'];

$last_two = substr($from, -2);

if($last_two > 15){
	$disp_from = "16";
	$disp_to = "30";
}else{
	$disp_from = "01";
	$disp_to = "15";
}
$replace_disp_from = substr_replace($from,$disp_from, -2);
$replace_disp_to = substr_replace($to,$disp_to, -2);

$main_date = $_POST['from'];
$no_days = mysql_query("SELECT DISTINCT date FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to'");
$count_days = mysql_num_rows($no_days);

require_once('phpexcel.php');
$sheet = new Excel('Attendance');
$sheet->home();
$sheet->label('Attendance Date');
$sheet->down();
$sheet->label('Total Working Days :');
$sheet->right();
$sheet->label($count_days);
$sheet->down();$sheet->home();
$sheet->label($from);
$sheet->right(); //Move the cursor left
$sheet->label($to);
$sheet->down();$sheet->home();
	$sheet->label("EMPLOYEE ID");
$sheet->right();
	$sheet->label("FULLNAME");
$sheet->right();
	$sheet->label("DAYS PRESENT");
$sheet->right();
	$sheet->label("MINUTES OF LATE");
$sheet->down();$sheet->home();
$qry_log = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '".$_SESSION['company']."' AND inactive = '0' ORDER BY employee_id ASC");
$rounded_grosstotal = 0;
$total_deduction_all = 0;
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
						$total_min_late = round($total_min_late);
						
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
				
				$rounded_gross = round($gross_pay);
				$rounded_grosstotal = $rounded_grosstotal + $rounded_gross;
				
				$total_deduction_all = $total_deduction_all + $total_deduction;
				

	$sheet->label($employee_id);
$sheet->right();
	$sheet->label($fullname);
$sheet->right();
	$sheet->label($count_present);
$sheet->right();
	$sheet->label($total_min_late);
$sheet->down();$sheet->home();
}

$sheet->send(); //Melt the user's face off
}
?>