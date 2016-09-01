<?php

ob_start();
session_start();
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');

}else{

if($_SESSION['company'] == 1){
$from = $_GET['from'];
$to = $_GET['to'];
$get_employeeid = $_GET['employee_id'];

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
$sheet->label($from);
$sheet->right(); //Move the cursor left
$sheet->label($to);
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
$sheet->right();
	$sheet->label("LOCATION");
$sheet->down();$sheet->home();
if($get_employeeid == ""){
	$qry_log = mysql_query("SELECT DISTINCT 
										tbl_logs.emp_id AS mostemp,
										tbl_logs.date AS dated,
										tbl_employee.inactive,
										tbl_employee.fullname
										FROM 
										tbl_logs,
										tbl_employee
										WHERE 
										tbl_employee.employee_id = tbl_logs.emp_id
										AND
										tbl_employee.inactive = '0'
										AND
										tbl_logs.company_id = '".$_SESSION['company']."'
										AND
										tbl_logs.date BETWEEN '$from' and '$to'
										ORDER BY tbl_logs.date, tbl_employee.fullname");
}else{
	$qry_log = mysql_query("SELECT DISTINCT 
										tbl_logs.emp_id AS mostemp,,
										tbl_logs.date,
										tbl_employee.inactive,
										tbl_employee.fullname
										FROM 
										tbl_logs,
										tbl_employee
										WHERE 
										tbl_employee.employee_id = tbl_logs.emp_id
										AND
										tbl_employee.employee_id = '$get_employeeid'
										AND
										tbl_employee.inactive = '0'
										AND
										tbl_logs.company_id = '".$_SESSION['company']."'
										AND
										tbl_logs.date BETWEEN '$from' and '$to'
										
										ORDER BY tbl_logs.date, tbl_employee.fullname");
}
										
				while($row_log = mysql_fetch_array($qry_log)){
				$employee_id = $row_log['mostemp'];
				$date = $row_log['dated'];
				$fullname = $row_log['fullname'];
				//$attendance_in = $row_log['time'];
				//$attendance_out = $row_log['ended'];
				//$attendance_in = $row_log['start_time'];
				//$attendance_out = $row_log['end_time'];
					$qry_timein = mysql_query("SELECT time FROM tbl_logs USE INDEX (emp_id,date) WHERE date = '$date' AND emp_id = '$employee_id' ORDER BY time ASC LIMIT 1");
					$row_timein = mysql_fetch_array($qry_timein);
					$attendance_in = $row_timein['time'];
					$qry_timeout = mysql_query("SELECT time FROM tbl_logs USE INDEX (emp_id,date) WHERE date = '$date' AND emp_id = '$employee_id' ORDER BY time DESC LIMIT 1");
					$row_timeout = mysql_fetch_array($qry_timeout);
					$attendance_out = $row_timeout['time'];
				/*$attendance_location_in = $row_timein['location'];
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
					$qry_timeout = mysql_query("SELECT * FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$date' AND emp_id = '$employee_id' ORDER BY log_id DESC");
					$row_timeout = mysql_fetch_array($qry_timeout);
				$attendance_out = $row_timeout['time'];
				$attendance_location_out = $row_timeout['location']; */
	$sheet->label($date);
$sheet->right();
	$sheet->label($employee_id);
$sheet->right();
	$sheet->label($fullname);
$sheet->right();
	$sheet->label($attendance_in);
$sheet->right();
	$sheet->label($attendance_out);
$sheet->right();
if($attendance_location_in == ""){
	$sheet->label($attendance_location_out);
}else{
	$sheet->label($attendance_location_in);
}
$sheet->right();
	$sheet->label(round($min_late));	
$sheet->down();$sheet->home();
}

$sheet->send(); //Melt the user's face off
}else{ ////////////////////////////////////////////////////////////////////////////////FOR PREVIOUS LOGS/////////////////////////////////////////////////////
	$from = $_GET['from'];
$to = $_GET['to'];
$get_employeeid = $_GET['employee_id'];

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
$sheet->label($from);
$sheet->right(); //Move the cursor left
$sheet->label($to);
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
$sheet->right();
	$sheet->label("ATTENDANCE TYPE");
$sheet->right();
	$sheet->label("LOCATION");
$sheet->right();
	$sheet->label("MINUTES OF LATE");
$sheet->down();$sheet->home();
if($get_employeeid == ""){
	$qry_log = mysql_query("SELECT DISTINCT 
										tbl_logs.emp_id,
										tbl_logs.date,
										
										tbl_employee.inactive,
										tbl_employee.fullname
										FROM 
										tbl_logs,
										tbl_employee
										WHERE 
										tbl_employee.employee_id = tbl_logs.emp_id
										AND
										tbl_employee.inactive = '0'
										AND
										tbl_logs.company_id = '".$_SESSION['company']."'
										AND
										tbl_logs.date BETWEEN '$from' and '$to'
										
										ORDER BY tbl_logs.date, tbl_employee.fullname");
}else{
	$qry_log = mysql_query("SELECT DISTINCT 
										tbl_logs.emp_id,
										tbl_logs.date,
										
										tbl_employee.inactive,
										tbl_employee.fullname
										FROM 
										tbl_logs,
										tbl_employee
										WHERE 
										tbl_employee.employee_id = tbl_logs.emp_id
										AND
										tbl_employee.employee_id = '$get_employeeid'
										AND
										tbl_employee.inactive = '0'
										AND
										tbl_logs.company_id = '".$_SESSION['company']."'
										AND
										tbl_logs.date BETWEEN '$from' and '$to'
										
										ORDER BY tbl_logs.date, tbl_employee.fullname");
}
										
				while($row_log = mysql_fetch_array($qry_log)){
				$employee_id = $row_log['emp_id'];
				$date = $row_log['date'];
				$fullname = $row_log['fullname'];
				//$attendance_in = $row_log['start_time'];
				//$attendance_out = $row_log['end_time'];
					 //$qry_timein = mysql_query("SELECT time FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$date' AND emp_id = '$employee_id' AND action = 'In' ORDER BY time ASC LIMIT 1");
					$qry_timein = mysql_query("SELECT time,location,status FROM tbl_logs USE INDEX (emp_id,date) WHERE date = '$date' AND emp_id = '$employee_id' ORDER BY time ASC LIMIT 1");
					$row_timein = mysql_fetch_array($qry_timein);
				$attendance_in = $row_timein['time'];
				$attendance_location_in = $row_timein['location'];
				$status = $row_timein['status'];
				$startime_qry = mysql_query("SELECT * FROM tbl_timein WHERE company_id = '".$_SESSION['company']."'");
						$row_startime = mysql_fetch_array($startime_qry);
						if($employee_id == 'SIN003' || $employee_id == 'SIN040'){
							$start_time = "02:00 pm";
						}else{
							$start_time = $row_startime['start_time'];
							$real_time = $row_startime['real_time'];
						}
							$startin = strtotime($start_time);
							$real_time = strtotime($real_time); 							
						$strattendancetime = strtotime($attendance_in);
						if($strattendancetime > $startin){
							$min_late =  ($strattendancetime - $real_time);
							$min_late = date('H:i:s', $min_late);
						}
						else{
							$min_late = 0;
						}
					//$qry_timeout = mysql_query("SELECT * FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$date' AND emp_id = '$employee_id' ORDER BY time DESC LIMIT 1");
					$qry_timeout = mysql_query("SELECT time,location FROM tbl_logs USE INDEX (emp_id,date) WHERE date = '$date' AND emp_id = '$employee_id' ORDER BY time DESC LIMIT 1");
					$row_timeout = mysql_fetch_array($qry_timeout);
				$attendance_out = $row_timeout['time'];
				$attendance_location_out = $row_timeout['location'];
				if($min_late == 0){
					
				}else{
					//$min_late = floor($min_late).'min/s'. 60 - ($min_late % 60) .'s';
					//$sec_late = 60 - ($min_late % 60) .'s';
					//$min_late = floor($min_late).'min/s '. $sec_late;
					
						$sheet->label($date);
				$sheet->right();
					$sheet->label($employee_id);
				$sheet->right();
					$sheet->label($fullname);
				$sheet->right();
					$sheet->label($attendance_in);
				$sheet->right();
					$sheet->label($attendance_out);
				$sheet->right();
					$sheet->label($status);
				$sheet->right();
				if($attendance_location_in == ""){
					$sheet->label($attendance_location_out);
				}else{
					$sheet->label($attendance_location_in);
				}
				$sheet->right();
					$sheet->label($min_late);
					$sheet->down();
				}
					
$sheet->home();
}

$sheet->send(); //Melt the user's face off
}


}
?>