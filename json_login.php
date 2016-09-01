<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$password = md5($_POST['password']);

$check_log = mysql_query("SELECT * FROM tbl_admin WHERE username = '".$_POST['login']."' AND password = '$password'");
	$count_check = mysql_num_rows($check_log);
	$row_check = mysql_fetch_array($check_log);
	
	if($count_check > 0){
		echo $row_check['company_id'];
	}else{
		echo 0;
	}

?>