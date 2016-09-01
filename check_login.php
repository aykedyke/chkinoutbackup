<?php
	require_once("mod_lib/connection.php");
	include("mod_lib/ConnectionMgr.php");
	
	$username = $_GET['username'];
	$password = $_GET['password'];
	$device_id = $_GET['device_id'];
	
	
	$qry_check_login = mysql_query("SELECT * FROM tbl_users WHERE (username = '$username' OR email = '$username') AND password = '$password' AND device_id = '$device_id'");
	$row_check = mysql_num_rows($qry_check_login);
	
	if($row_check >= 1)
	{
		echo 1;
	}
	else
	{
		echo 0;
	}
?>