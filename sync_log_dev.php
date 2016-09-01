<?php
date_default_timezone_set('Asia/Manila');

$current_date = date('Y-m-d');
$current_time = date('H:i:s');

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$arr = json_decode($_POST['json'],true);

foreach($arr as $item) { 
   $emp_id = $item['emp_id'];
   $status = $item['status'];
   $time = $item['time'];//$current_time;
   $date = $item['date'];//$current_date;
   $action = $item['action'];
   $company = $item['company_id'];
   $location = "";
   $longitude = $item['longitude'];
   $latitude = $item['latitude'];
   $dev_id = $item['dev_id'];
 
   if($longitude != "" && $latitude != ""){
		$geolocation = $latitude.','.$longitude;
		$request = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.$geolocation.'&sensor=false'; 
		$file_contents = file_get_contents($request);
		$json_decode = json_decode($file_contents);
		
	  $location = $json_decode->results[0]->formatted_address;
	}
   
   if($company == ""){
	$comp_qry = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$emp_id'");
	$row_comp = mysql_fetch_array($comp_qry);
	
	$company = $row_comp['company_id'];
   }else{
   }
   
   $check_id = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$emp_id' AND company_id = '$company'");
   $numcheck = mysql_num_rows($check_id);
   
   if($numcheck == 0){
      echo 0;
   }else{
	  $check_approved = mysql_query("SELECT * FROM tbl_firstregister WHERE emp_id = '$emp_id' AND approved = '1' AND dev_id = '$dev_id' and deactivate = '0'");
	  $row_approved = mysql_fetch_array($check_approved);
			$count_approved = mysql_num_rows($check_approved);
			
			if($count_approved == 0){
				echo "Device not yet approved!";
			}else{
				$str_date = strtotime($date);
				$date_day = date('l', $str_date);
				if($date_day == "Monday" || $date_day == "Tuesday" || $date_day == "Wednesday" || $date_day == "Thursday" || $date_day == "Friday"){
					$starttime = mysql_query("SELECT time,log_id,start_time FROM tbl_logs WHERE date = '$date' AND emp_id = '$emp_id' ORDER BY log_id ASC LIMIT 1");
					$row_st = mysql_fetch_array($starttime);
					$start_time = $row_st['start_time'];
					$log_id = $row_st['log_id'];
					if($start_time == ""){
						$start_time = $time;
					}else{
					}
					//mysql_query("DELETE FROM tbl_logs WHERE date = '$date' AND emp_id = '$emp_id'");
					mysql_query("INSERT INTO tbl_logs (emp_id,status,time,date,action,company_id,location,longitude,latitude,phone_time,original_time,start_time,end_time) VALUES ('$emp_id','$status','$time','$date','$action','$company','$location','$longitude','$latitude','$phone_time','$original_time','$start_time','$time')");
					
				}else{
					if($company == '3' || $company == '2'){
						mysql_query("INSERT INTO tbl_logs (emp_id,status,time,date,action,company_id,location,longitude,latitude,phone_time,original_time,start_time,end_time) VALUES ('$emp_id','$status','$time','$date','$action','$company','$location','$longitude','$latitude','$phone_time','$original_time','$start_time','$time')");
					}else{
						mysql_query("INSERT INTO tbl_overtime_logs (emp_id,status,time,date,action,company_id,location,longitude,latitude,phone_time,original_time,start_time,end_time) VALUES ('$emp_id','$status','$time','$date','$action','$company','$location','$longitude','$latitude','$phone_time','$original_time','$start_time','$time')");
					}
				}
				mysql_query("INSERT INTO tbl_locateme (emp_id,longitude,latitude,date,destination) VALUES ('$emp_id','$longitude','$latitude','$date','$time')");
				$qry_supervisor = mysql_query("SELECT * FROM tbl_supervisor where company_id = '$company'");

							 while($row_supervisor = mysql_fetch_array($qry_supervisor)){
								   $emp_supervisor_id = $row_supervisor['emp_id'];
								   $qry_token = mysql_query("SELECT * FROM tbl_firstregister WHERE emp_id = '$emp_supervisor_id'");
								   $row_token = mysql_fetch_array($qry_token);

								   $dev_token = $row_token['dev_token'];
								   if($row_token['dev_type'] == 'android'){
									  include('./push_notif/android_push_notif.php');
								   }
								   if($row_token['dev_type'] == 'ios'){
									  //include('./push_notif/simplepush.php');
								   }
								} 
				echo 1;
			}
   }
};

?>
