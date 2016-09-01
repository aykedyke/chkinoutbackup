<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

require_once("../../mod_lib/connection.php");
include("../../mod_lib/ConnectionMgr.php");

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Tapdash Heuristics');
$pdf->SetTitle('Payslip');
$pdf->SetSubject('Payslip');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data

// set header and footer fonts

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor


// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('helvetica', '', 8, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

$employee_id = $_GET['employee_id'];
$from = $_GET['from'];
$to = $_GET['to'];

$no_days = mysql_query("SELECT DISTINCT date FROM tbl_logs WHERE date BETWEEN '$from' and '$to'");
$count_days = mysql_num_rows($no_days);

$comp_from_date = date("F d, Y", strtotime($from));
$comp_to_date = date("F d, Y", strtotime($to));

$html ='';

				//$qry_log = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$employee_id'");
				$qry_log = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$employee_id'");
				while($row_log = mysql_fetch_array($qry_log)){
				$employee_id = $row_log['employee_id'];
				$id = $row_log['id'];
				$fullname = $row_log['fullname'];
				
				$qry_absent = mysql_query("SELECT DISTINCT date,emp_id FROM tbl_logs WHERE date BETWEEN '$from' and '$to' AND emp_id = '$employee_id'");
				$count_present = mysql_num_rows($qry_absent);
				
				$no_days = mysql_query("SELECT DISTINCT date,emp_id FROM tbl_logs WHERE date BETWEEN '$from' and '$to' AND emp_id = '$employee_id'");
				$total_min_late = 0;
				while($row_days = mysql_fetch_array($no_days)){
					$days_date = $row_days['date'];
					$days_emp_id = $row_days['emp_id'];
					$qry_timein = mysql_query("SELECT * FROM tbl_logs WHERE date = '$days_date' AND emp_id = '$days_emp_id' AND status = 'Attendance' AND action = 'In' ORDER BY log_id ASC");
					$row_timein = mysql_fetch_array($qry_timein);
						$attendance_in = $row_timein['time'];
						$startin = strtotime('11:00 am'); 
						$strattendancetime = strtotime($attendance_in);
						if($strattendancetime > $startin){
							$min_late =  ($strattendancetime - $startin) / 60;
						}
						else{
							$min_late = 0;
						}
						$total_min_late = $total_min_late + $min_late;
						
				}
				$count_absent = $count_days - $count_present;
				
				$emp_info_qry = mysql_query("SELECT * FROM tbl_employee_info WHERE employee_id = '$employee_id'");
				$count_info = mysql_num_rows($emp_info_qry);
				$row_info = mysql_fetch_array($emp_info_qry);
				
				if($count_info == 0){
					$basic_pay = 0;
				}else{
					$basic_pay = $row_info['basic_salary'];
				}
				
				$cutoff_pay = $basic_pay / 2;
				
				// OTHER DEDUCTIONS //
					$basic_tax = $row_info['basic_tax'];
					$basic_tax = $basic_tax / 2;
					$qry_deduction = mysql_query("SELECT SUM(deduction_price) AS total_deduction FROM tbl_deduction WHERE emp_id = '$id'");
					$row_deduction = mysql_fetch_array($qry_deduction);
					$other_deduction_total = $row_deduction['total_deduction'];
					$new_other_deduction_total = $other_deduction_total / 2;
				// END OTHER DEDUCTIONS //
				
				$total_payment = $cutoff_pay - $basic_tax;
				
				// PER DAY OF Employee //
					$perday_pay = $basic_pay / 22;
					$absent_deduction = $perday_pay * $count_absent;
				// PER HOUR of Employee //
					$perhour_pay = $perday_pay / 8;
				// PER MINUTE of Employee //
					$perminute_pay = $perhour_pay / 60;
					$late_deduction = $perminute_pay * $total_min_late;
					
				$total_deduction = $late_deduction + $absent_deduction + $new_other_deduction_total;
				
				$total_gross = $total_payment - $total_deduction;

// Set some content to print




$html .='
<div style="text-align:center"><b>Tapdash Heuristics</b></div>
'.$fullname.'<br>
Cut Off Period : '.$comp_from_date.' To '.$comp_to_date.'<br/>
Number of Working days : '.$count_days.'<br/>
Number of days present : '.$count_present.'<br/>
Late : '.$total_min_late.' minute/s<br/><br/>
<table border="1" cellpadding="3" >
	<tr>
		<th align = "center">Payments</th>
		<th align = "center">Deductions</th>
	</tr>
	<tr>
		<td>
			Basic Payment : PHP '.number_format($cutoff_pay).'.00 <br/>
			Tax Payable : PHP '.number_format($basic_tax).'.00 <br/><br/>

		</td>
		<td align = "right">
		Absent Deduction : PHP '.round($absent_deduction).' .00 <br/>
		Late Deduction : PHP '.round($late_deduction).' .00 <br/>
		';
		$qry_deduction = mysql_query("SELECT * FROM tbl_deduction WHERE emp_id = '$id'");
		while($row_deduction = mysql_fetch_array($qry_deduction)){
		$html .='
			'.$row_deduction['deduction_name'].' : PHP '.number_format(round($row_deduction['deduction_price'] / 2)).' .00 <br />
		';
		}
		$html .='
		<br />
		</td>
	</tr>
	<tr>
		<td align = "center"><b>Total Payment : PHP '.number_format($total_payment).'.00</b></td>
		<td align = "center"><b>Total Deductions : PHP '.round($total_deduction).' .00</b></td>
	</tr>
</table>
<br/>
<br/>
<div style="text-align:right"><b>Net Pay : PHP '.number_format($total_gross).' .00</b></div>
<div style="text-align:left">
	Prepared by: <br/> <br/> <br/><br/>
	Sample Name <br/>
	HR Manager
</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
';
}
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
