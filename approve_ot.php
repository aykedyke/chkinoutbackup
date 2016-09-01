<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$id = $_GET['id'];

mysql_query("UPDATE tbl_overtime SET approved = '1' WHERE overtime_id = '$id'");

echo "<script>document.location.href='overtime_form.php'</script>";

?>