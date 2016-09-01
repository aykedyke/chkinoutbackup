<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$song_id = $_POST['song_id'];

if($song_id == ""){
	$data = array('status' => "Failed"
			 );
						
	print json_encode($data); 
}else{
	$song_query = mysql_query("SELECT * FROM tbl_song WHERE song_id = '$song_id'");
	$row_song = mysql_fetch_array($song_query);
	
	$old_dl = $row_song['downloads'];
	$new_dl = $old_dl + 1;
	
	mysql_query("UPDATE tbl_song SET downloads = '$new_dl' WHERE song_id = '$song_id'");
	
	$data = array('status' => "Success"
			 );
						
	print json_encode($data); 
}

?>