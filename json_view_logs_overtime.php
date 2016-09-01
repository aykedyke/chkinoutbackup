<?php

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$emp_id = $_POST['emp_id'];
$date = $_POST['date'];

$emp_qry = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$emp_id'");
$row_emp = mysql_fetch_array($emp_qry);

$emp_company_id = $row_emp['company_id'];

$check_supervisor = mysql_query("SELECT * FROM tbl_supervisor WHERE emp_id = '$emp_id'");
$count_supervisor = mysql_num_rows($check_supervisor);
$row_supervisor = mysql_fetch_array($check_supervisor);

$department_id = $row_supervisor['department_id'];
$company_id = $row_supervisor['company_id'];

if($count_supervisor >= 1){
	$employee_arr = array();
	$log_query = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '$company_id' ORDER BY employee_id ASC");
	while($row_log = mysql_fetch_array($log_query)){
		$emp_id_log = $row_log['employee_id'];
		$employee_name = $row_log['fullname'];
		
		$employee_arr[] = array("Employee ID" => $emp_id_log,
							 "Employee Name" => $employee_name,
								);
	}

	$attendance_arr = array();
$qry_fn = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '$company_id' AND employee_id = '$emp_id'");
	$row_fn = mysql_fetch_array($qry_fn);
		 $fullname = $row_fn['fullname'];
		 $sl = $row_fn['sick_leave'];
		 $vl = $row_fn['vacation_leave'];
$qry_log = mysql_query("SELECT DISTINCT date from tbl_overtime_logs WHERE company_id = '$company_id' AND emp_id = '$emp_id' ORDER BY date DESC");
while($row_log = mysql_fetch_array($qry_log)){
		$date = $row_log['date'];
	$qry_fn = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '$company_id' AND employee_id = '$emp_id'");
	$row_fn = mysql_fetch_array($qry_fn);
		 $fullname = $row_fn['fullname'];
		 $sl = $row_fn['sick_leave'];
		 $vl = $row_fn['vacation_leave'];
	$qry_timein = mysql_query("SELECT * FROM tbl_overtime_logs WHERE company_id = '$company_id' AND date = '$date' AND emp_id = '$emp_id' AND status = 'Overtime' AND action = 'In' ORDER BY overtime_log_id ASC");
	$row_timein = mysql_fetch_array($qry_timein);
		$attendance_in = $row_timein['time'];
		if($attendance_in == ""){
			$attendance_in = "-";
		}
	$qry_lunchout = mysql_query("SELECT * FROM tbl_overtime_logs WHERE company_id = '$company_id' AND date = '$date' AND emp_id = '$emp_id' AND status = 'Lunch' AND action = 'Out' ORDER BY overtime_log_id ASC");
	$row_lunchout = mysql_fetch_array($qry_lunchout);
		$lunch_out = $row_lunchout['time'];
		if($lunch_out == ""){
			$lunch_out = "-";
		}
	$qry_lunchin = mysql_query("SELECT * FROM tbl_overtime_logs WHERE company_id = '$company_id' AND date = '$date' AND emp_id = '$emp_id' AND status = 'Lunch' AND action = 'In' ORDER BY overtime_log_id DESC");
	$row_lunchin = mysql_fetch_array($qry_lunchin);
		$lunch_in = $row_lunchin['time'];
		if($lunch_in == ""){
			$lunch_in = "-";
		}
	$qry_meetingout = mysql_query("SELECT * FROM tbl_overtime_logs WHERE company_id = '$company_id' AND date = '$date' AND emp_id = '$emp_id' AND status = 'Meeting' AND action = 'Out' ORDER BY overtime_log_id ASC");
	$row_meetingout = mysql_fetch_array($qry_meetingout);
		$meeting_out = $row_meetingout['time']." - ".$row_meetingout['company'];
		if($meeting_out == ""){
			$meeting_out = "-";
		}
	$qry_meetingin = mysql_query("SELECT * FROM tbl_overtime_logs WHERE company_id = '$company_id' AND date = '$date' AND emp_id = '$emp_id' AND status = 'Meeting' AND action = 'In' ORDER BY overtime_log_id DESC");
	$row_meetingin = mysql_fetch_array($qry_meetingout);
		$meeting_in = $row_meetingin['time'];
		if($meeting_in == ""){
			$meeting_in = "-";
		}
	$qry_timeout = mysql_query("SELECT * FROM tbl_overtime_logs WHERE company_id = '$company_id' AND date = '$date' AND emp_id = '$emp_id' ORDER BY overtime_log_id DESC");
	$row_timeout = mysql_fetch_array($qry_timeout);
		$attendance_out = $row_timeout['time'];
		if($attendance_out == ""){
			$attendance_out = "-";
		}
	$startime_qry = mysql_query("SELECT * FROM tbl_timein WHERE company_id = '$company_id'");
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
	
	$locate_arr = array();
	$location_qry = mysql_query("SELECT * FROM tbl_locateme WHERE emp_id = '$emp_id' AND date = '$date' ORDER BY locateme_id ASC");
	while($row_location = mysql_fetch_array($location_qry)){
		$long = $row_location['longitude'];
		$lat = $row_location['latitude'];
		$destination = $row_location['destination'];
		
		$locate_arr[] = array("longitude" => $long, "latitude" => $lat, "destination" => $destination);
		
	}
		$attendance_arr[] = array("Date" => $date,
						 "Attendance In" => $attendance_in,
						 "Out for Lunch" => $lunch_out,
						 "In from Lunch" => $lunch_in,
						 "Out for Meeting" => $meeting_out,
						 "In from Meeting" => $meeting_in,
						 "Attendance Out" => $attendance_out,
						 "Minutes Late" => $min_late,
						 "Locations" => $locate_arr, "destination" => $destination);
}
$payslip_arr = array();
$payslip_query = mysql_query("SELECT * FROM tbl_payslip ORDER BY payslip_id DESC");
$row_payslip = mysql_fetch_array($payslip_query);

$from_date = $row_payslip['from_date'];
$to_date = $row_payslip['to_date'];

$payslip_arr[] = array("From DATE" => $from_date,
						 "To DATE" => $to_date
					   );

		$data = array('status' => "Success",
			'Employee ID' => $emp_id,
			'Sick Leave' => $sl,
			'Vacation Leave' => $vl,
			'Attendance' => $attendance_arr,
			'Employees' => $employee_arr,
			'User_type' => "Supervisor",
			'Dept ID' => $department_id,
			'Payslip' => $payslip_arr
			 );
			 
print json_encode($data);
}else{

$attendance_arr = array();
$qry_fn = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$emp_id'");
	$row_fn = mysql_fetch_array($qry_fn);
		 $fullname = $row_fn['fullname'];
		 $sl = $row_fn['sick_leave'];
		 $vl = $row_fn['vacation_leave'];
$qry_log = mysql_query("SELECT DISTINCT date from tbl_overtime_logs WHERE emp_id = '$emp_id' ORDER BY date DESC LIMIT 30");
while($row_log = mysql_fetch_array($qry_log)){
		$date = $row_log['date'];
	$qry_fn = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$emp_id'");
	$row_fn = mysql_fetch_array($qry_fn);
		 $fullname = $row_fn['fullname'];
		 $sl = $row_fn['sick_leave'];
		 $vl = $row_fn['vacation_leave'];
	$qry_timein = mysql_query("SELECT * FROM tbl_overtime_logs WHERE date = '$date' AND emp_id = '$emp_id' AND status = 'Overtime' AND action = 'In' ORDER BY overtime_log_id ASC");
	$row_timein = mysql_fetch_array($qry_timein);
		$attendance_in = $row_timein['time'];
		if($attendance_in == ""){
			$attendance_in = "-";
		}
	$qry_lunchout = mysql_query("SELECT * FROM tbl_overtime_logs WHERE date = '$date' AND emp_id = '$emp_id' AND status = 'Lunch' AND action = 'Out' ORDER BY overtime_log_id ASC");
	$row_lunchout = mysql_fetch_array($qry_lunchout);
		$lunch_out = $row_lunchout['time'];
		if($lunch_out == ""){
			$lunch_out = "-";
		}
	$qry_lunchin = mysql_query("SELECT * FROM tbl_overtime_logs WHERE date = '$date' AND emp_id = '$emp_id' AND status = 'Lunch' AND action = 'In' ORDER BY overtime_log_id DESC");
	$row_lunchin = mysql_fetch_array($qry_lunchin);
		$lunch_in = $row_lunchin['time'];
		if($lunch_in == ""){
			$lunch_in = "-";
		}
	$qry_meetingout = mysql_query("SELECT * FROM tbl_overtime_logs WHERE date = '$date' AND emp_id = '$emp_id' AND status = 'Meeting' AND action = 'Out' ORDER BY overtime_log_id ASC");
	$row_meetingout = mysql_fetch_array($qry_meetingout);
		$meeting_out = $row_meetingout['time']." - ".$row_meetingout['company'];
		if($meeting_out == ""){
			$meeting_out = "-";
		}
	$qry_meetingin = mysql_query("SELECT * FROM tbl_overtime_logs WHERE date = '$date' AND emp_id = '$emp_id' AND status = 'Meeting' AND action = 'In' ORDER BY overtime_log_id DESC");
	$row_meetingin = mysql_fetch_array($qry_meetingout);
		$meeting_in = $row_meetingin['time'];
		if($meeting_in == ""){
			$meeting_in = "-";
		}
	$qry_timeout = mysql_query("SELECT * FROM tbl_overtime_logs WHERE date = '$date' AND emp_id = '$emp_id' ORDER BY overtime_log_id DESC");
	$row_timeout = mysql_fetch_array($qry_timeout);
		$attendance_out = $row_timeout['time'];
		if($attendance_out == ""){
			$attendance_out = "-";
		}
	$startin = strtotime('11:00 am'); 
	$strattendancetime = strtotime($attendance_in);
	if($strattendancetime > $startin){
		$min_late =  ($strattendancetime - $startin) / 60;
	}
	else{
		$min_late = 0;
	}
	$locate_arr = array();
	$location_qry = mysql_query("SELECT * FROM tbl_locateme WHERE emp_id = '$emp_id' AND date = '$date' ORDER BY locateme_id ASC");
	while($row_location = mysql_fetch_array($location_qry)){
		$long = $row_location['longitude'];
		$lat = $row_location['latitude'];
		$destination = $row_location['destination'];
		
		$locate_arr[] = array("longitude" => $long, "latitude" => $lat, "destination" => $destination);
		
	}
		$attendance_arr[] = array("Date" => $date,
						 "Attendance In" => $attendance_in,
						 "Out for Lunch" => $lunch_out,
						 "In from Lunch" => $lunch_in,
						 "Out for Meeting" => $meeting_out,
						 "In from Meeting" => $meeting_in,
						 "Attendance Out" => $attendance_out,
						 "Locations" => $locate_arr, "destination" => $destination);
}
$payslip_arr = array();
$payslip_query = mysql_query("SELECT * FROM tbl_payslip WHERE company_id = '$emp_company_id' ORDER BY payslip_id DESC");
while($row_payslip = mysql_fetch_array($payslip_query)){

$from_date = $row_payslip['from_date'];
$to_date = $row_payslip['to_date'];

$payslip_arr[] = array("From DATE" => $from_date,
						 "To DATE" => $to_date
					   );
}

		$data = array('status' => "Success",
					'Employee ID' => $emp_id,
					'Sick Leave' => $sl,
					'Vacation Leave' => $vl,
					'Attendance' => $attendance_arr,
					'User_type' => "Regular",
					'Payslip' => $payslip_arr
					);
			 
print json_encode($data);
} 

?>