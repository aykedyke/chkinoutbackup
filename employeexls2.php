<?php

ob_start();
session_start();
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');

}else{

$recent_payslip = mysql_query("SELECT * FROM tbl_payslip WHERE company_id = '".$_SESSION['company']."' ORDER BY payslip_id DESC");
$row_payslip = mysql_fetch_array($recent_payslip);
$from = $row_payslip['from_date'];
$to = $row_payslip['to_date'];

$last_two = substr($from, -2);

if($last_two > 15){
	$disp_from = "16";
	$disp_to = "30";
}else{
	$disp_from = "01";
	$disp_to = "15";
}
$replace_disp_from = substr_replace($from,$disp_from, -2);
$replace_disp_to = substr_replace($to,$disp_to, -2);

$main_date = $_POST['from'];
$no_days = mysql_query("SELECT DISTINCT date FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to'");
$count_days = mysql_num_rows($no_days);

require_once('phpexcel.php');

$sheet = new Excel('EmployeeList');
$sheet->home();
	$sheet->label("EMPLOYEE NAME");
$sheet->right();
	$sheet->label("ALIAS");
$sheet->right();
	$sheet->label("IDENTITY NO.");
$sheet->right();
	$sheet->label("IDENTITY TYPE");
$sheet->right();
	$sheet->label("GENDER");
$sheet->right();
	$sheet->label("NATIONALITY");
$sheet->right();
	$sheet->label("COUNTRY OF BIRTH");
$sheet->right();
	$sheet->label("POSITION");
$sheet->right();
	$sheet->label("BIRTHDAY");
$sheet->right();
	$sheet->label("HIRED DATE");
$sheet->down();$sheet->home();
		$qry_department = mysql_query("SELECT * FROM tbl_department WHERE company_id = '".$_SESSION['company']."'");
		while($row_department = mysql_fetch_array($qry_department)){
	$sheet->label($row_department['department_name']);
$sheet->down();$sheet->home();		
				$qry_log = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '".$_SESSION['company']."' AND inactive != '1' AND department_id = '".$row_department['department_id']."' ORDER BY fullname");
				$xxx = 0;
				while($row_log = mysql_fetch_array($qry_log)){
				//include("class_payroll.php");
				

	$sheet->label($row_log['fullname']);
$sheet->right();
	$sheet->label($row_log['nick_name']);
$sheet->right();
	$sheet->label($row_log['identity_no']); // BASIC RATE 
$sheet->right();
	$sheet->label($row_log['identity_type']);
$sheet->right();
	$sheet->label($row_log['gender']);
$sheet->right();
	$sheet->label($row_log['nationality']);
$sheet->right();
	$sheet->label($row_log['countrybirth']);
$sheet->right();
	$sheet->label($row_log['position']);
$sheet->right();
	$sheet->label($row_log['birthday']);
$sheet->right();
	$sheet->label($row_log['start_date']);
$sheet->down();$sheet->home();
}
}
$sheet->down();
$sheet->send(); //Melt the user's face off
}
?>