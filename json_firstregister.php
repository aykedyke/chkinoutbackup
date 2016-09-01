<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

//EMPLOYEE ID
//SERIAL NUMBER PER COMPANY
//DEVICE TOKEN
//DEVICE ID

$emp_id = $_POST['emp_id'];
$serial = $_POST['serial'];
$dev_token = $_POST['dev_token'];
$dev_id = $_POST['dev_id'];
$dev_type = $_POST['dev_type']; 

/* $emp_id = "TH14-0003";
$serial = "ngjtl3jrua";
$dev_token = "12fbd65515ca1454082058614d43a93401bd4e2ac8e10be49487c705d9144a5a";
$dev_id = "92A0D8CF-BBAE-4CB4-8376-BA4D5D20528D";
$dev_type = "ios"; */

if($dev_type == ""){
	$dev_type = "ios";
}else{
	
}

$check_emp = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$emp_id'");
$count_emp = mysql_num_rows($check_emp);

if($count_emp == 0){
	echo 0;
}else{
	$row_emp = mysql_fetch_array($check_emp);
	$company_id2 = $row_emp['company_id'];
	
	$check_ser = mysql_query("SELECT * FROM tbl_company WHERE company_id = '$company_id2' AND company_code = '$serial'");
	$count_check = mysql_num_rows($check_ser);
	
	if($count_check == 0){
		echo 00;
	}else{
		$emp_chek = mysql_query("SELECT * FROM tbl_firstregister WHERE emp_id = '$emp_id'");
		$count_emp_chek = mysql_num_rows($emp_chek);
		
		if($count_emp_chek == 0){
			mysql_query("INSERT INTO tbl_firstregister (emp_id,dev_token,dev_id,dev_type,company_id) VALUES ('$emp_id','$dev_token','$dev_id','$dev_type','$company_id2')");
			echo 1;
		}else{
			mysql_query("DELETE FROM tbl_firstregister WHERE emp_id = '$emp_id'");
			mysql_query("INSERT INTO tbl_firstregister (emp_id,dev_token,dev_id,dev_type,company_id) VALUES ('$emp_id','$dev_token','$dev_id','$dev_type','$company_id2')");
			echo 1;
		}
	}
}
?>