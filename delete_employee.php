<?php

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$id = $_GET['id'];
$employee_id = $_GET['eid'];
$del_employee = mysql_query("UPDATE tbl_employee SET inactive = '1' WHERE id = '$id'");



mysql_query("DELETE FROM tbl_firstregister WHERE emp_id = '$employee_id'");



echo "<script>document.location.href='view_employee.php'</script>";

?>