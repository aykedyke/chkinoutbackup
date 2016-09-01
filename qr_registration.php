<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$result_qr = $_POST['result_qr'];
$location_qr = $_POST['location_qr'];

 $date_added = date('r');
$date_tracked = strtotime($date_added);

$qry_check_qr = mysql_query("SELECT * FROM tbl_qr_details WHERE result_qr = '$result_qr'");
$count_check_qr = mysql_fetch_array($qry_check_qr);

if($count_check_qr > 0)
{
	echo 0;
}
else
{

$qry_qr_register = mysql_query("INSERT INTO tbl_qr_details (result_qr, location_qr, date_added, date_tracked) VALUES ('$result_qr','$location_qr','$date_added','$date_tracked')");

if($qry_qr_register)
{
	echo 1;
}
else
{
	echo 0;
}
}
?>