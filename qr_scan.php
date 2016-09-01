<?php
include("validation30mins.php");


$device_id = $_POST['device_id'];
$qr_scan = $_POST['qr_scan'];

$timezone = "Asia/Manila";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone); 

$date_added = date('r');
$date_tracked = strtotime($date_added);
$today = date("m/d/Y");

$redeem_code = "T2W-".rand(0,99999999999);

$qry_check_data = mysql_query("SELECT * FROM tbl_qr_details WHERE result_qr = '$qr_scan'");
$row_check_date = mysql_fetch_array($qry_check_data);
$count_check_date = mysql_num_rows($qry_check_data);

if($count_check_date == 0)
{
	echo 0;
}
else
{
	$initial_qr_id = $row_check_date['qr_details_id'];
	$qry_combination = mysql_query("SELECT * FROM tbl_qr_combination WHERE initial_qr_id = '$initial_qr_id'");
	$count_combination = mysql_num_rows($qry_combination);
	$row_combination = mysql_fetch_array($qry_combination);
	
	if($count_combination == 0)
	{
		echo 1;
	}
	else
	{
		//$qry_check_record = mysql_query("SELECT * FROM tbl_record WHERE (device_id = '$device_id' AND device_id != '353170050741135' AND device_id != '353627058189757' AND device_id != '353976055986255') AND date_added = '$today' AND redeem_code != ''");
		//$count_check_record = mysql_num_rows($qry_check_record);
		
		//if($count_check_record > 0)
		//{
			//echo 3;
		//}
		//else
		//{
		
		$qry_record = mysql_query("SELECT * FROM tbl_record WHERE initial_qr_id != '' AND final_qr_id = '' AND device_id = '$device_id' ORDER BY record_id DESC");
		$count_record = mysql_num_rows($qry_record);
		$row_record = mysql_fetch_array($qry_record);
		
		
		if($count_record == 0)
		{
			mysql_query("INSERT INTO tbl_record (device_id, initial_qr_id, initial_qr_date, initial_qr_date_tracked, date_added, date_tracked) VALUES ('$device_id','$initial_qr_id', '$date_added', '$date_tracked', '$today', '$date_tracked')");
			echo 2;
		}
		else
		{
			//mysql_query("UPDATE tbl_record SET final_qr_id='$initial_qr_id', final_qr_date='$date_added', final_qr_date_tracked='$date_tracked'");
			$first_scan = $row_record['initial_qr_id'];
			$check_scan_combination = mysql_query("SELECT * FROM tbl_qr_combination WHERE initial_qr_id = '$first_scan' AND final_qr_id = '$initial_qr_id'");
			$count_scan_combination = mysql_num_rows($check_scan_combination);
			$row_scan_combination = mysql_fetch_array($check_scan_combination);
			
			$promocode_id = $row_scan_combination['promocode_id'];
			
			if($count_scan_combination == 0)
			{
				mysql_query("INSERT INTO tbl_record (device_id, initial_qr_id, initial_qr_date, initial_qr_date_tracked, date_added, date_tracked) VALUES ('$device_id','$initial_qr_id', '$date_added', '$date_tracked', '$today', '$date_tracked')");
				echo 2;
			}
			else
			{
				$id = $row_record['record_id'];
						
						$query_2 = mysql_query("UPDATE tbl_record 
												SET 
												final_qr_id = '$initial_qr_id' , 
												final_qr_date = '$date_added', 
												final_qr_date_tracked = '$date_tracked',
												redeem_code = '$redeem_code',
												promocode_id = '$promocode_id',
												date_added = '$today',
												date_tracked = '$date_tracked'
												WHERE record_id = '$id'");
												
						if($query_2)
						{
							$qry_sucess = mysql_query("SELECT 
														tbl_record.redeem_code,
														tbl_promocode.promocode_name,
														tbl_promocode.image_path,
														tbl_promocode.expiration_date,
														tbl_record.date_added
														FROM
														tbl_record, tbl_promocode
														WHERE
														tbl_record.record_id = '$id' AND
														tbl_record.promocode_id = tbl_promocode.promocode_id
														");
							$arr = array();
								
									while($rows = mysql_fetch_assoc($qry_sucess))
										{
											$arr[] =  $rows;
										}
										
										print json_encode($arr);
						}
			}
			
		}
		
		
		//}
	}
}
?>