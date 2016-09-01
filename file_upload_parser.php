<?php 
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$fileName = $_FILES["file1"]["name"]; // The file name 
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder 
$fileType = $_FILES["file1"]["type"]; // The type of file it is 
$fileSize = $_FILES["file1"]["size"]; // File size in bytes 
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
$song_name = $_POST['song_name']; 
$duration = $_POST['duration']; 
$album_id = $_POST['album_id'];
$song_path = "album".$album_id."/$fileName";
if (!$fileTmpLoc) { // if file not chosen 
echo "ERROR: Please browse for a file before clicking the upload button."; 
exit(); 
} 

if(move_uploaded_file($fileTmpLoc, $song_path))
{ 
$song_qry = mysql_query("INSERT INTO tbl_song (album_id, song_name, duration, song_location) VALUES ('$album_id','$song_name','$duration','$song_path')");
echo "$fileName upload is complete";
}
 else 
 { 
 echo "move_uploaded_file function failed"; 
 } 
 ?>