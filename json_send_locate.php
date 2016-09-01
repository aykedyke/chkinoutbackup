<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$emp_id = $_POST['emp_id'];
$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];
$date = $_POST['date'];
$destination = $_POST['destination'];

$comp_qry = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$emp_id'");
$row_comp = mysql_fetch_array($comp_qry);
	
$company = $row_comp['company_id'];

$qry_check = mysql_query("SELECT * FROM tbl_locateme WHERE emp_id = '$emp_id'");
$count_check = mysql_num_rows($qry_check);

	mysql_query("INSERT INTO tbl_locateme (emp_id,longitude,latitude,date,destination) VALUES ('$emp_id','$longitude','$latitude','$date','$destination')");
	
	echo 1;


?>