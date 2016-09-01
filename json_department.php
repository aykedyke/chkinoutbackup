<?php

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$company_id = $_POST['company_id'];

$dept_query = mysql_query("SELECT * FROM tbl_department WHERE company_id = '$company_id'");
while($row_dept = mysql_fetch_array($dept_query)){
	$dep_id = $row_dept['department_id'];
	$dep_name = $row_dept['department_name'];
	
	$dep_arr[] = array("Department ID" => $dep_id,
						"Department Name" => $dep_name
						);
}

$data = array('status' => "Success",
			'Department' => $dep_arr
			 );
			 
print json_encode($data);

?>