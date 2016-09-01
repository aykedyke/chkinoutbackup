<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$id = $_GET['id'];

mysql_query("UPDATE tbl_firstregister SET approved = '1' WHERE firstregister_id = '$id'");

$qry_fr = mysql_query("SELECT * FROM tbl_firstregister WHERE firstregister_id = '$id'");
$row_fr = mysql_fetch_array($qry_fr);

$dev_token = $row_fr['dev_token'];
if($row_fr['dev_type'] == 'android'){
  include('./push_notif/android_fr.php');
}
if($row_fr['dev_type'] == 'ios'){
  //include('./push_notif/ios_fr.php');
}

echo "<script>document.location.href='dev_registration.php'</script>";

?>