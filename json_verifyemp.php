<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$emp_id = $_POST['emp_id'];
$company_id = $_POST['company_id'];

$check_id = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$emp_id' AND company_id = '$company_id'");
$row_check = mysql_fetch_array($check_id);
   $numcheck = mysql_num_rows($check_id);

   
   if($numcheck == 0){
		echo 0;
   }else{
		echo $row_check['fullname'];
   }


?>