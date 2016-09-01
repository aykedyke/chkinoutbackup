<?php

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$id = $_GET['id'];
$del_employee = mysql_query("UPDATE tbl_employee SET inactive = '0' WHERE id = '$id'");
echo "<script>document.location.href='view_employee.php'</script>";

?>