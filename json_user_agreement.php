<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$company_id = $_POST['company_id'];
$top10_query = mysql_query("SELECT * FROM tbl_user_agreement WHERE company_id = '$company_id'");
$row_top10 = mysql_fetch_array($top10_query);

if($company_id == ""){
	$data = array('status' => "Failed"
			 );
	}		 
else{
	$data = array('ID' => $row_top10['user_agreement_id'],
					'Description' => $row_top10['description']
			 );
}
						
	print json_encode($data); 

?>