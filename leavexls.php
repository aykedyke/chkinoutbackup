<?php

ob_start();
session_start();
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');

}else{


require_once('phpexcel.php');
$sheet = new Excel('Leaves');
$sheet->home();
$sheet->label('Leaves');
$sheet->down();$sheet->home();
$sheet->label($from);
$sheet->right(); //Move the cursor left
$sheet->label($to);
$sheet->down();$sheet->home();
	$sheet->label("EMPLOYEE ID");
$sheet->right();
	$sheet->label("FULLNAME");
$sheet->right();
	$sheet->label("No. of Days");
$sheet->right();
	$sheet->label("Type of Leave");
$sheet->right();
	$sheet->label("FROM DATE");
$sheet->right();
	$sheet->label("TO DATE");
$sheet->down();$sheet->home();
	$leave_qry = mysql_query("SELECT * FROM tbl_leave WHERE company_id = '2' AND approve = '1' ORDER BY fullname ASC");
	while($row_leave = mysql_fetch_array($leave_qry)){
	$employee_id = $row_leave['emp_id'];
	$fullname = $row_leave['fullname'];
	$no_days = $row_leave['no_days'];
	$type_leave = $row_leave['type_leave'];
	$from_date = $row_leave['from_date'];
	$to_date = $row_leave['to_date'];
	$sheet->label($employee_id);
$sheet->right();
	$sheet->label($fullname);
$sheet->right();
	$sheet->label($no_days);
$sheet->right();
	$sheet->label($type_leave);
$sheet->right();
	$sheet->label($from_date);
$sheet->right();
	$sheet->label($to_date);
$sheet->down();$sheet->home();
}

$sheet->send(); //Melt the user's face off
}
?>