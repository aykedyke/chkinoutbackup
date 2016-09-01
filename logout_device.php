<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$session_id = $_POST['session_id'];

$login_qry = mysql_query("SELECT * FROM tbl_user where session_id = '$session_id'");
$count_log = mysql_num_rows($login_qry);

if($count_log > 0){
	$update_session = mysql_query("UPDATE tbl_user SET session_id = '0' WHERE session_id = '$session_id'");
	echo 1;
}else{
	echo 0;
}
	
?>