<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$id = $_GET['id'];

mysql_query("DELETE FROM tbl_shows WHERE shows_id = '$id'");

echo "<script>document.location.href='shows.php'</script>";

?>