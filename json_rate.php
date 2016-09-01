<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$song_id = $_POST['song_id'];
$user_id = $_POST['user_id'];
$rate = $_POST['rate'];

if($song_id == "" || $user_id == "" || $rate == ""){
	$data = array('status' => "Failed"
			 );
						
	print json_encode($data);
}else{
	mysql_query("INSERT INTO tbl_ratings (song_id,user_id,ratings) VALUE ('$song_id','$user_id','$rate')");
	$rate_query = mysql_query("SELECT SUM(ratings) AS totalrating FROM tbl_ratings WHERE song_id = '$song_id'");
	$row_rate = mysql_fetch_array($rate_query);
	 $count_rate = mysql_num_rows($rate_query);
	 $total_rate = $row_rate['totalrating'];
	
	$avg_rate = ($total_rate/$count_rate);
	$final_avg = round($avg_rate);
	mysql_query("UPDATE tbl_song SET ratings = '$final_avg' WHERE song_id = '$song_id'");
	
	$data = array('status' => "Success"
		 );
						
	print json_encode($data);
}

?>