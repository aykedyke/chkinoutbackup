<?php

ob_start();
session_start();
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');

}else{
error_reporting(0);
$cutoff_id = $_GET['id'];
$cutoff_qry = mysql_query("SELECT * FROM tbl_cutoff WHERE cutoff_id='$cutoff_id'");
	$row_cutoff = mysql_fetch_array($cutoff_qry);
	
	$payroll_from = $row_cutoff['payroll_from'];
	$payroll_from = strtotime($payroll_from);
	$payroll_from = date('F j, Y', $payroll_from);
	
	$payroll_to = $row_cutoff['payroll_to'];
	$payroll_to = strtotime($payroll_to);
	$payroll_to = date('F j, Y', $payroll_to);
	
	$payroll_qry = mysql_query("SELECT * FROM tbl_payroll WHERE cutoff_id='$cutoff_id' ORDER BY employee_name ASC");
	$payroll_qry1 = mysql_query("SELECT * FROM tbl_payroll WHERE cutoff_id='$cutoff_id' ORDER BY employee_name ASC");
	$row_payroll1 = mysql_fetch_array($payroll_qry1);

require_once('phpexcel.php');

$sheet = new Excel('Payslip');
$sheet->home();
$sheet->label('Cutoff Date');
$sheet->down();
$sheet->label($payroll_from);
$sheet->right(); //Move the cursor left
$sheet->label($payroll_to);
$sheet->down();$sheet->home();
$sheet->label("NUMBER OF WORKING DAYS :");
$sheet->right(); //Move the cursor left
$sheet->label($row_payroll1['no_of_days']);
$sheet->down();$sheet->home();
	$sheet->label("EMPLOYEE NAME");
$sheet->right();
	$sheet->label("MONTHLY RATE");
$sheet->right();
	$sheet->label("SEMI MONTHLY BASIC");
$sheet->right();
	$sheet->label("SEMI MONTHLY ALLOWANCE");
$sheet->right();
	$sheet->label("SEMI MONTHLY TOTAL RATE");
$sheet->right();
	$sheet->label("DAYS PRESENT");
$sheet->right();
	$sheet->label("RATE PER DAY");
$sheet->right();
	$sheet->label("OVERTIME NO. OF HOURS");
$sheet->right();
	$sheet->label("OVERTIME AMMOUNT");
$sheet->right();
	$sheet->label("UNDERTIME / ABSENCES NO. OF HOURS");
$sheet->right();
	$sheet->label("UNDERTIME / ABSENCES AMMOUNT");
$sheet->right();
	$sheet->label("SALARY ADJUSTMENT");
$sheet->right();
	$sheet->label("GROSS PAY");
$sheet->right();
	$sheet->label("TAX");
$sheet->right();
	$sheet->label("SSS ER");
$sheet->right();
	$sheet->label("SSS EE");
$sheet->right();
	$sheet->label("SSS EC");
$sheet->right();
	$sheet->label("SSS LOAN");
$sheet->right();
	$sheet->label("PHIC ER");
$sheet->right();
	$sheet->label("PHIC EE");
$sheet->right();
	$sheet->label("PHIC LOAN");
$sheet->right();
	$sheet->label("HDMF ER");
$sheet->right();
	$sheet->label("HDMF EE");
$sheet->right();
	$sheet->label("HDMF LOAN");
$sheet->right();
	$sheet->label("STAFF LOAN");
$sheet->right();
	$sheet->label("TOTAL DEDUCTIONS");
$sheet->right();
	$sheet->label("NET PAY");
$sheet->down();$sheet->home();
		while($row_payroll = mysql_fetch_array($payroll_qry)){
					if($row_payroll['salary_adjustment'] == ""){
						$row_payroll['salary_adjustment'] = 0;
					}

	$sheet->label($row_payroll['employee_name']);
$sheet->right();
	$sheet->label(($row_payroll['monthly_rate']));
$sheet->right();
	$sheet->label(($row_payroll['semi_monthly_basic'])); // BASIC RATE 
$sheet->right();
	$sheet->label(($row_payroll['semi_monthly_allowance']));
$sheet->right();
	$sheet->label(($row_payroll['semi_monthly_total']));
$sheet->right();
	$sheet->label($row_payroll['days_present']);
$sheet->right();
	$sheet->label(round($row_payroll['rate_per_day'], 2)); //RATE PER DAY 
$sheet->right();
	$sheet->label($row_payroll['ot_hours']);
$sheet->right();
	$sheet->label(($row_payroll['ot_ammount'])); // OVERTIME AMMOUNT
$sheet->right();
	$sheet->label($row_payroll['ut_hours']);
$sheet->right();
	$sheet->label(round($row_payroll['ut_ammount'], 2)); // ABSENT AMMOUNT
$sheet->right();
	$sheet->label(($row_payroll['salary_adjustment']));
$sheet->right();
	$sheet->label(($row_payroll['gross_pay']));
$sheet->right();
	$sheet->label(($row_payroll['tax'])); // tax
$sheet->right();
	$sheet->label(($row_payroll['sss_er']));
$sheet->right();
	$sheet->label(($row_payroll['sss_ee']));
$sheet->right();
	$sheet->label(($row_payroll['sss_ec']));
$sheet->right();
	$sheet->label(($row_payroll['sss_loan']));
$sheet->right();
	$sheet->label(($row_payroll['phic_er']));
$sheet->right();
	$sheet->label(($row_payroll['phic_ee']));
$sheet->right();
	$sheet->label(($row_payroll['phic_loan']));
$sheet->right();
	$sheet->label(($row_payroll['hdmf_er']));
$sheet->right();
	$sheet->label(($row_payroll['hdmf_ee']));
$sheet->right();
	$sheet->label(($row_payroll['hdmf_loan']));
$sheet->right();
	$sheet->label(($row_payroll['staff_loan']));
$sheet->right();
	$sheet->label(($row_payroll['total_deductions']));
$sheet->right();
	$sheet->label(($row_payroll['net_pay']));
$sheet->down();$sheet->home();
}
}
$sheet->down();
$sheet->send(); //Melt the user's face off
?>