<?php

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

	$employee_id = $_POST['employee_id'];
	
	$comp_qry = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$employee_id'");
	$row_comp = mysql_fetch_array($comp_qry);
	
	$company = $row_comp['company_id'];
	
	$hours = $_POST['hours'];
	$date = $_POST['date'];
	$date = strtotime($date);
	$date = date('Y-m-d',$date);
	$add_dept_qry = mysql_query("INSERT INTO tbl_overtime (employee_id,company_id,hours,date) VALUES ('$employee_id','$company','$hours','$date')");
	if($add_dept_qry){
		echo 1;
	}else{
		echo 0;
	}


?>