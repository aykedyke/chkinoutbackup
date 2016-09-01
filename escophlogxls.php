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
$count_days = 0;
	while($row_no_days = mysql_fetch_array($no_days)){
		$date123 = $row_no_days['date'];
		$date_day = date('l', strtotime($date123));
		if($date_day == "Monday" || $date_day == "Tuesday" || $date_day == "Wednesday" || $date_day == "Thursday" || $date_day == "Friday"){
			$count_days = $count_days + 1;
		}else{
		}
	}

require_once('phpexcel.php');

//$objPHPExcel->getActiveSheet()->getStyle('1:1')->getFont()->setBold(true);

$sheet = new Excel('Attendance');

$sheet->home();
	$sheet->label("FULLNAME");
$sheet->right();
$date_log = mysql_query("SELECT DISTINCT date FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to' ORDER BY date ASC");
while($row_date = mysql_fetch_array($date_log)){
$date = $row_date['date'];
	$sheet->label($date."-IN");
$sheet->right();
	$sheet->label($date."-OUT");
$sheet->right();
}
	$sheet->label("Total minutes of late");
	$sheet->right();
	$sheet->label("Absent/s");
	$sheet->right();
$sheet->down();$sheet->home();
///////////////////////////////////////
	$qry_log = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '".$_SESSION['company']."' AND inactive = '0' ORDER BY fullname ASC");						
	while($row_log = mysql_fetch_array($qry_log)){
			$fullname = $row_log['fullname'];
			$emp_id = $row_log['employee_id'];
			$sick_leave = $row_log['sick_leave'];
			$vacation_leave = $row_log['vacation_leave'];
			$compassionate_leave = $row_log['compassionate_leave'];
			$ns_leave = $row_log['ns_leave'];
			$paternity_leave = $row_log['paternity_leave'];
			$maternity_leave = $row_log['maternity_leave'];
			$hospitalisation = $row_log['hospitalisation'];
			$childcare_leave = $row_log['childcare_leave'];
			$ext_childcare_leave = $row_log['ext_childcare_leave'];
			$sheet->label($fullname);
			$sheet->right();
				$date_log2 = mysql_query("SELECT DISTINCT date FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to' ORDER BY date ASC");
				$total_min_late = 0;
				$qry_absent = mysql_query("SELECT DISTINCT date,emp_id FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to' AND emp_id = '$emp_id'");
				
				$count_present = 0;
				while($row_no_days = mysql_fetch_array($qry_absent)){
					$date123 = $row_no_days['date'];
					$date_day = date('l', strtotime($date123));
					if($date_day == "Monday" || $date_day == "Tuesday" || $date_day == "Wednesday" || $date_day == "Thursday" || $date_day == "Friday"){
						$count_present = $count_present + 1;
					}else{
					}
				}
				
				
				while($row_date2 = mysql_fetch_array($date_log2)){
					$date2 = $row_date2['date'];
					$day_date2 = date('l',strtotime($date2));
						$in_log = mysql_query("SELECT time,status FROM tbl_logs USE INDEX (emp_id,date) WHERE date = '$date2' AND emp_id = '$emp_id' ORDER BY time ASC LIMIT 1");
						$row_in = mysql_fetch_array($in_log);
						$time_in = $row_in['time'];
						
						if($row_in['status'] == 'Leave'){
							$time_in == 'Leave';
						}else if($row_in['status'] == 'Sick Leave'){
							$time_in == 'Sick Leave';
						}else if($row_in['status'] == 'Vacation Leave'){
							$time_in == 'Vacation Leave';
						}
						
						if(($day_date2 == "Saturday" || $day_date2 == "Sunday") && $time_in == ""){
							$time_in = "Off Day";
						}
						
						$startime_qry = mysql_query("SELECT * FROM tbl_timein WHERE company_id = '".$_SESSION['company']."'");
							$row_startime = mysql_fetch_array($startime_qry);
							$start_time = $row_startime['start_time'];
								$startin = strtotime($start_time); 
							$strattendancetime = strtotime($time_in);
							if($strattendancetime > $startin){
								$min_late =  ($strattendancetime - $startin);
							}
							else{
								$min_late = 0;
							}
							$total_min_late = $total_min_late + $min_late;
						
						
							$sheet->label($time_in);
						$sheet->right();
						$out_log = mysql_query("SELECT time FROM tbl_logs USE INDEX (emp_id,date,action) WHERE date = '$date2' AND emp_id = '$emp_id' ORDER BY time DESC LIMIT 1");
						$row_out = mysql_fetch_array($out_log);
						$time_out = $row_out['time'];
						if($time_in == "Off Day"){
							$time_out = "Off Day";
						}else if($time_in == "Leave"){
							$time_out = "Leave";
						}
							$sheet->label($time_out);
						$sheet->right();	
				}
						$total_min_late = date('H:i:s', $total_min_late);
						$sheet->label($total_min_late);
						$sheet->right();
						$sheet->label($count_days - $count_present);
						$sheet->right();
						$sheet->down();$sheet->home();
	}

$sheet->send(); //Melt the user's face off
}
?>