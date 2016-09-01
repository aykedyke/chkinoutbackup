<?php

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$id = $_GET['id'];
$del_employee = mysql_query("UPDATE tbl_cutoff SET publish = '1' WHERE cutoff_id = '$id'");
echo "<script>document.location.href='index.php'</script>";

?>