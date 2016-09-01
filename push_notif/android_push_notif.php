<?php
//require_once("mod_lib/connection.php");
//include("mod_lib/ConnectionMgr.php");

//$emp_id = $_POST['emp_id']; // get emp Id thru post

/*
// select device token of the supervisor
$check_supervisor = mysql_query("SELECT dev_token from tbl_firstregister tf 
								INNER JOIN tbl_supervisor ts
								ON tf.emp_id = ts.emp_id");
$row_supervisor = mysql_fetch_array($check_supervisor);
$dev_token_supervisor = $row_supervisor['dev_token'];*/
//$deviceToken = $dev_token;

$data = array( 'message' => $emp_id.' has loggged in.' .' | '. $time .' | '. $date);

$ids = array( $dev_token,
			  'abc'); // device token upon registration to google 

  
$apiKey = 'AIzaSyBZUfPP4qqKptmC_pKTWJTEZP9a1-BbCQ8';//'AIzaSyAiFSNnKoyPtAPXvI7oN5m3rTT6xfa0oY8'; // google account app key (server key)
$url = 'https://android.googleapis.com/gcm/send'; // link to send notif 
$post = array(
				'registration_ids'  => $ids,
				'data'              => $data,
			 );

$headers = array( 
                    'Authorization: key=' . $apiKey,
                    'Content-Type: application/json'
                );
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, $url );
curl_setopt( $ch, CURLOPT_POST, true );
curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $post ) );
$result = curl_exec( $ch );
if ( curl_errno( $ch ) )
{
   // echo 'GCM error: ' . curl_error( $ch );
}

curl_close( $ch );
    //echo $result;

?>