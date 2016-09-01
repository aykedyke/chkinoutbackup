<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$email = $_POST['email'];
$cnumber = $_POST['cnumber'];
$dname = $_POST['dname'];

$seed = str_split('abcdefghijklmnopqrstuvwxyz'
                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                 .'0123456789!@#$%^&*()'); // and any other characters
shuffle($seed); // probably optional since array_is randomized; this may be redundant
$rand = '';
foreach (array_rand($seed, 6) as $k) $rand .= $seed[$k];

$password = $rand;
$to      = $email;
$subject = 'Email Verification Music App';
$message = 'Hi '.$dname.', we verified your email address, kindly use the following login credentials for Music App

Email : '.$email.'
Password : '.$password.'';
$from = 'From: admin@tapdashheuristics.com';

$reg_qry = mysql_query("INSERT INTO tbl_user (user_email,user_password,user_contact,user_dname,user_credits) VALUES ('$email','$password','$cnumber','$dname','200')");

	if(mail($to, $subject, $message, $from)){
		$response = array("Status" => 1,
						"Message Code" => "1231",
						"Message Title" => "Success",
			  "Message description" => "Please Check your Email for verification");
		print json_encode($response);
	}else{
		$response = array("Status" => 0,
						"Message Code" => "3211",
						"Message Title" => "Failed",
			  "Message description" => "Error sending post from device");
		print json_encode($response);
	}
?>