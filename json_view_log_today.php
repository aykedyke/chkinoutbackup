<?php

$date = $_POST['date'];
$attendance_arr = array();
$log_query = mysql_query("SELECT DISTINCT emp_id WHERE date = '$date'");
while($row_log = mysql_fetch_array($log_query)){
	$emp_id = $row_log['emp_id'];
	
	$attendance_arr[] = array("Employee ID" => $emp_id,
						 "Employee Name" => $attendance_in,
						 "Date" => $date);
}

$data = array('status' => "Success",
			'Present Employees' => $attendance_arr
			 );
			 
print json_encode($data); 


?>