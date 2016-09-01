<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$emp_id = $_POST['emp_id'];
$fullname = $_POST['fullname'];
$date_filed = $_POST['date_filed'];
$reason = $_POST['reason'];
$no_days = $_POST['no_days'];
$from_date = $_POST['from_date'];
$to_date = $_POST['to_date'];
$type_leave = $_POST['type_leave'];
//$company_id = $_POST['company_id'];

	$check_id = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$emp_id'");
	$numcheck = mysql_num_rows($check_id);
	$row_check = mysql_fetch_array($check_id);
	
	
	$company_id = $row_check['company_id'];
   
   if($numcheck == 0){
		echo 0;
   }else{
		$leave_qry = mysql_query("INSERT INTO tbl_leave (emp_id,fullname,date_filed,reason,no_days,from_date,to_date,approve,type_leave,company_id) 
							VALUES 
						('$emp_id','$fullname','$date_filed','$reason','$no_days','$from_date','$to_date','0','$type_leave','$company_id')"); 

		echo 1;
   }
?>