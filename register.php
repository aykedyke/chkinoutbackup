<?php

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$emp_id = $_POST['emp_id'];
$fullname = $_POST['fullname'];
$birthday = $_POST['birthday'];
$position = $_POST['position'];
$dep_id = $_POST['department_id'];
$company_id = $_POST['company_id'];
$status = $_POST['status'];

$check_emp = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$emp_id'");
$num_check = mysql_num_rows($check_emp);

if($num_check >= 1){
	echo 0;
}else{

if(!empty($_FILES['qr_image']['tmp_name']))
{
	$path = "qr_image/";
	$qr_avatar = $path.basename($_FILES['qr_image']['name']);
	
	if(move_uploaded_file($_FILES['qr_image']['tmp_name'], $qr_avatar)){
		if(mysql_query("INSERT INTO tbl_employee (employee_id,fullname,birthday,position,qr_image,department_id,sick_leave,vacation_leave,company_id,status) VALUES ('$emp_id','$fullname','$birthday','$position','$qr_avatar','$dep_id','12','12','$company_id','$status')")){
			echo 1;
		}else{
			echo 00;
		}
	}
	else{
		echo 0;
	}
}else{
	echo 2;
}
}

?>