<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$initial_qr_id = $_POST['initial_qr_id'];
$final_qr_id = $_POST['final_qr_id'];
$promocode_id = $_POST['promocode_id'];

$date_added = date('r');
$date_tracked = strtotime($date_added);

if($initial_qr_id == $final_qr_id)
{
	echo 0;
}
else
{
	$qry_validation = mysql_query("SELECT * from tbl_qr_combination WHERE initial_qr_id = '$initial_qr_id' AND final_qr_id = '$final_qr_id'");
	$count_validation = mysql_num_rows($qry_validation);
	
	if($count_validation > 0)
	{
		echo 0;
	}
	else
	{
		$qry_insert = mysql_query("INSERT INTO tbl_qr_combination 
									(initial_qr_id,
									final_qr_id,
									promocode_id,
									date_added,
									date_tracked) 
									VALUES 
									('$initial_qr_id',
									'$final_qr_id',
									'$promocode_id',
									'$date_added',
									'$date_tracked')");
									
		$qry_insert2 = mysql_query("INSERT INTO tbl_qr_combination 
									(initial_qr_id,
									final_qr_id,
									promocode_id,
									date_added,
									date_tracked) 
									VALUES 
									('$final_qr_id',
									'$initial_qr_id',
									'$promocode_id',
									'$date_added',
									'$date_tracked')");
									
		if($qry_insert && $qry_insert2)
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
}


?>