<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$seed = str_split('abcdefghijklmnopqrstuvwxyz'
                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                 .'0123456789!@#$%^&*()'); // and any other characters
shuffle($seed); // probably optional since array_is randomized; this may be redundant
$rand = '';
foreach (array_rand($seed, 12) as $k) $rand .= $seed[$k];

$email = $_POST['email'];
$password = $_POST['password'];
$device_id = $_POST['device_id'];

$login_qry = mysql_query("SELECT * FROM tbl_user where user_email = '$email' AND user_password = '$password'");
$count_log = mysql_num_rows($login_qry);

if($count_log > 0){
	$session_id = $rand;
	$update_session = mysql_query("UPDATE tbl_user SET session_id = '$session_id' WHERE user_email = '$email'");
	
	$user_qry = mysql_query("SELECT * FROM tbl_user WHERE user_email = '$email'");
	$row_user = mysql_fetch_array($user_qry);
	
	$user_array[] = array("user_id" => $row_user['user_id'],
						"user_email" => $row_user['user_email'],
						"user_password" => $row_user['user_password'],
						"user_contact" => $row_user['user_contact'],
						"user_dname" => $row_user['user_dname'],
						"user_image" => $row_user['user_image'],
						"user_credits" => $row_user['user_credits'],
						"session_id" => $row_user['session_id']);
	$response = array("Status" => "Success",
			  "User Details" => $user_array);
		print json_encode($response);
	

}else{
$response = array("Status" => 0,
						"Message Code" => "4352",
						"Message Title" => "Failed",
			  "Message description" => "Username or Password are incorrect");
		print json_encode($response);
}
	
?>