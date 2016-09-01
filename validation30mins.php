<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");
include ( "NexmoMessage.php" );
$timezone = "Asia/Manila";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone); 

		$sender_name = "Tapdash";

		$mobile_number = "+639351130843";
		 $message_content = "Tapdash heuristics sample message! -mike";
		 
		 $nexmo_sms = new NexmoMessage('dba1057f', '15ccadbe'); 
		 $info = $nexmo_sms->sendText( $mobile_number, $sender_name, $message_content );
		 
		 echo "<Script>alert('Message Successfully Sent!');</script>";

?>