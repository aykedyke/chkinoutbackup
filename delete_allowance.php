<?php

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$id = $_GET['id'];
$del_employee = mysql_query("DELETE FROM tbl_allowance WHERE allowance_id = '$id'");
echo "<script>document.location.href='view_employee.php'</script>";

?>