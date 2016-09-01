<?php

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$arr = json_decode($_POST['json'],true);

foreach($arr as $item) { 

   $emp_id = $item['emp_id'];
   $status = $item['status'];
   $time = $item['time'];
   $date = $item['date'];
   $action = $item['action'];
   $company = $item['company_id'];
   $location = "";
   $longitude = $item['longitude'];
   $latitude = $item['latitude'];
   
   /*if($longitude != "" && $latitude != "" && $location == ""){
		$geolocation = $latitude.','.$longitude;
		$request = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.$geolocation.'&sensor=false'; 
		$file_contents = file_get_contents($request);
		$json_decode = json_decode($file_contents);
		
	  $location = $json_decode->results[0]->formatted_address;
	}*/
   
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
   mysql_query("INSERT INTO tbl_overtime_logs (emp_id,status,time,date,action,company_id,location,latitude,longitude) VALUES ('$emp_id','$status','$time','$date','$action','$company','$location','$latitude','$longitude')");
   echo 1;
   }
};

?>
