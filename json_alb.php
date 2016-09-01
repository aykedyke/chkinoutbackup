<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");
	
	$date = $_POST['date'];
	
	$employee_id = $_POST['employee_id'];
	
	$comp_qry = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$employee_id'");
	$row_comp = mysql_fetch_array($comp_qry);
	
	$company = $row_comp['company_id'];
	
	$employee_arr = array();
	$emp_query = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '$company' ORDER BY employee_id ASC");
	while($row_log = mysql_fetch_array($emp_query)){
		$emp_id_log = $row_log['employee_id'];
		$employee_name = $row_log['fullname'];
		$dept_id = $row_log['department_id'];
		
		$dep_query = mysql_query("SELECT * FROM tbl_department WHERE department_id = '$dept_id'");
		$row_dep = mysql_fetch_array($dep_query);
		$dept_name = $row_dep['department_name'];
		
		$log_query = mysql_query("SELECT * FROM tbl_logs WHERE emp_id = '$emp_id_log' AND date = '$date' ORDER BY time ASC");
		$row_log_time = mysql_fetch_array($log_query);
		$time_in = $row_log_time['time'];
		$location_in = $row_log_time['location'];
		$latitude_in = $row_log_time['latitude'];
		$longitude_in = $row_log_time['longitude'];
		
		$log_out_query = mysql_query("SELECT * FROM tbl_logs WHERE emp_id = '$emp_id_log' AND date = '$date' AND action = 'Out' ORDER BY time DESC");
		$row_log_time_out = mysql_fetch_array($log_out_query);
		$time_out = $row_log_time_out['time'];
		$location_out = $row_log_time['location'];
		$latitude_out = $row_log_time['latitude'];
		$longitude_out = $row_log_time['longitude'];
		
		if($location_out == ""){
			$location = $location_in;
		}else{
			$location = $location_out;
		}
		
		if($latitude_out == ""){
			$latitude = $latitude_in;
		}else{
			$latitude = $latitude_out;
		}
		
		if($longitude_out == ""){
			$longitude = $longitude_in;
		}else{
			$longitude = $longitude_out;
		}
		
		if($time_in == ""){
			$status = "Absent";
		}else{
			$startin = strtotime('11:00 am');
			$time = strtotime($time_in);
			if($time > $startin){
				$status = "Late";
			}
			else{
				$status = "Present";
			}			
		}
		
		
		
		$employee_arr[] = array("Employee ID" => $emp_id_log,
							 "Employee Name" => $employee_name,
							 "Department" => $dept_name,
							 "Time In" => $time_in,
							 "Time Out" => $time_out,
							 "Status" => $status,
							 "location" => $location,
							 "latitude" => $latitude,
							 "longitude" => $longitude
								);
	}
	
	$data = array('status' => "Success",
			'Employees' => $employee_arr
			 );
			 
	print json_encode($data);

?>