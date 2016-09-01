<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$emp_id = $_POST['emp_id'];
$date = $_POST['date'];

$qry_locate = mysql_query("SELECT * FROM tbl_locateme WHERE emp_id = '$emp_id' AND date = '$date'");

while($row_log = mysql_fetch_array($qry_locate)){
		$emp_id_log = $row_log['emp_id'];
		$longitude = $row_log['longitude'];
		$latitude = $row_log['latitude'];
		$destination = $row_log['destination'];
		
		$locate_arr[] = array("Employee ID" => $emp_id_log,
							 "longitude" => $longitude,
							 "latitude" => $latitude, "destination" => $destination);
	}
	
	$data = array('status' => "Success",
			'Employees Location' => $locate_arr
			 );
			 
			 
	print json_encode($data);


?>