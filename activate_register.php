<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$id = $_GET['id'];

mysql_query("UPDATE tbl_firstregister SET deactivate = '0' WHERE firstregister_id = '$id'");

echo "<script>document.location.href='dev_deactivated.php'</script>";

?>