<?php
	
	ob_start();
	session_start();

	
	require_once("../mod_lib/connection.php");
	include("../mod_lib/ConnectionMgr.php");
	
	$department_name = $_POST['department_name'];
	$id = $_POST['id'];
	$company_id = $_SESSION['company'];
	
	mysql_query("INSERT INTO tbl_sub_department (department_id,department_name,company_id) VALUES ('$id','$department_name','$company_id')");
	echo "<script>alert('Sub department successfully added!');</script>";
	echo "<script>location.href='../assign_sub_dept.php?id=$id';</script>";
	
	
?>