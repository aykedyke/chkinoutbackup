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
$no_days = mysql_query("SELECT DISTINCT date FROM tbl_overtime_logs WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to'");
$count_days = mysql_num_rows($no_days);

require_once('phpexcel.php');
$sheet = new Excel('Attendance');
$sheet->home();
$sheet->label('Attendance Date');
$sheet->down();
$sheet->label($replace_disp_from);
$sheet->right(); //Move the cursor left
$sheet->label($replace_disp_to);
$sheet->down();$sheet->home();
	$sheet->label("DATE");
$sheet->right();
	$sheet->label("EMPLOYEE ID");
$sheet->right();
	$sheet->label("FULLNAME");
$sheet->right();
	$sheet->label("ATTENDANCE IN");
$sheet->right();
	$sheet->label("ATTENDANCE OUT");
$sheet->down();$sheet->home();
$qry_log = mysql_query("SELECT DISTINCT 
										tbl_overtime_logs.emp_id,
										tbl_overtime_logs.date,
										tbl_employee.inactive
										FROM 
										tbl_overtime_logs,
										tbl_employee
										WHERE 
										tbl_employee.employee_id = tbl_overtime_logs.emp_id
										AND
										tbl_employee.inactive = '0'
										AND
										tbl_overtime_logs.company_id = '".$_SESSION['company']."'
										AND
										tbl_overtime_logs.date BETWEEN '$from' and '$to'
										ORDER BY tbl_overtime_logs.date");
				while($row_log = mysql_fetch_array($qry_log)){
				$employee_id = $row_log['emp_id'];
				$date = $row_log['date'];
					$qry_fn = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '".$_SESSION['company']."' AND employee_id = '$employee_id'");
					$row_fn = mysql_fetch_array($qry_fn);
				$fullname = $row_fn['fullname'];
					$qry_timein = mysql_query("SELECT * FROM tbl_overtime_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$date' AND emp_id = '$employee_id' AND action = 'In' ORDER BY time ASC");
					$row_timein = mysql_fetch_array($qry_timein);
				$attendance_in = $row_timein['time'];
				$startime_qry = mysql_query("SELECT * FROM tbl_timein WHERE company_id = '".$_SESSION['company']."'");
						$row_startime = mysql_fetch_array($startime_qry);
						if($employee_id == 'SIN003' || $employee_id == 'SIN040'){
							$start_time = "02:00 pm";
						}else{
							$start_time = $row_startime['start_time'];
						}
							$startin = strtotime($start_time); 
						$strattendancetime = strtotime($attendance_in);
						if($strattendancetime > $startin){
							$min_late =  ($strattendancetime - $startin) / 60;
						}
						else{
							$min_late = 0;
						}
					$qry_timeout = mysql_query("SELECT * FROM tbl_overtime_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$date' AND emp_id = '$employee_id' ORDER BY time DESC");
					$row_timeout = mysql_fetch_array($qry_timeout);
				$attendance_out = $row_timeout['time'];
	$sheet->label($date);
$sheet->right();
	$sheet->label($employee_id);
$sheet->right();
	$sheet->label($fullname);
$sheet->right();
	$sheet->label($attendance_in);
$sheet->right();
	$sheet->label($attendance_out);
$sheet->down();$sheet->home();
}

$sheet->send(); //Melt the user's face off
}
?>