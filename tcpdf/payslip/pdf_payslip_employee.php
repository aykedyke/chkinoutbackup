<?php
ob_start();
session_start();
//if(!isset($_SESSION['admin'])){
	//header('location:http://tapdashheuristics.com/projects/attendance/login.php');
//}
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

if ($dom[$key]['tag'] AND isset($dom[$key]['attribute']['pagebreak'])) {
    // check for pagebreak
    if (($dom[$key]['attribute']['pagebreak'] == 'true') OR ($dom[$key]['attribute']['pagebreak'] == 'left') OR ($dom[$key]['attribute']['pagebreak'] == 'right')) {
        // add a page (or trig AcceptPageBreak() for multicolumn mode)
        $this->checkPageBreak($this->PageBreakTrigger + 1);
    }
    if ((($dom[$key]['attribute']['pagebreak'] == 'left') AND (((!$this->rtl) AND (($this->page % 2) == 0)) OR (($this->rtl) AND (($this->page % 2) != 0))))
            OR (($dom[$key]['attribute']['pagebreak'] == 'right') AND (((!$this->rtl) AND (($this->page % 2) != 0)) OR (($this->rtl) AND (($this->page % 2) == 0))))) {
        // add a page (or trig AcceptPageBreak() for multicolumn mode)
        $this->checkPageBreak($this->PageBreakTrigger + 1);
    }
}

$employee_id = $_POST['employee_id'];

$from_to_query = mysql_query("SELECT * FROM tbl_payslip WHERE company_id = '".$_GET['company']."' ORDER BY payslip_id DESC");
$row_from_to = mysql_fetch_array($from_to_query);
$from = $row_from_to['from_date'];
$to = $row_from_to['to_date'];

$no_days = mysql_query("SELECT DISTINCT date FROM tbl_logs WHERE company_id = '".$_GET['company']."' AND date BETWEEN '$from' and '$to'");
$count_days = mysql_num_rows($no_days);

$comp_from_date = date("F d, Y", strtotime($from));
$comp_to_date = date("F d, Y", strtotime($to));

$html ='';

				//$qry_log = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$employee_id'");
				$qry_log = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '".$_GET['emp_id']."'");
				$xxx = 0;
				while($row_log = mysql_fetch_array($qry_log)){
				include("../../class_payroll.php");

// Set some content to print
if($xxx == 2){
	$html .='<br pagebreak="true"/>';
	$xxx = 0;
}
$html .='
<div style="text-align:center"><b>Payslip</b></div>
'.$fullname.'<br>
Cut Off Period : December 16, 2015 To December 30, 2015<br/>
Number of Working days : 11<br/>
Number of days present : '.$count_present.'<br/>
Late : '.$total_min_late.' minute/s<br/>
<table border="1" cellpadding="3" >
	<tr>
		<th align = "center">Payments</th>
		<th align = "center">Deductions</th>
	</tr>
	<tr>
		<td>
			Basic Payment : PHP '.round($basic_rate,2).'<br/>
			Salary Adjustment : PHP '.round($salary_adjustment,2).'<br/>
			Overtime Pay : PHP '.round($overtime_ammount,2).'<br/>
			Tax Payable : PHP '.round($tax,2).'<br/><br/>
			Total Allowance : PHP '.round($basic_allowance,2).'<br/><br/>

		</td>
		<td align = "right">
		Absent Deduction : PHP '.round($absent_deduction,2).'<br/>
		Late Deduction : PHP '.round($late_deduction,2).'<br/>
		Undertime Deduction : PHP '.round($undertime_ammount,2).'<br/>
		Other Deduction / Loan : PHP '.round(($sss_loan + $hdmf_loan + $phic_loan + $staff_loan),2).'<br/>
		SSS : PHP '.round($sss,2).'<br/>
		PAGIBIG : PHP '.round($pagibig,2).'<br/>
		PhilHealth : PHP '.round($philhealth,2).'<br/>
		</td>
	</tr>
	<tr>
		<td align = "center"><b>Total Payment : PHP '.number_format(round(($basic_rate + $overtime_ammount + $basic_allowance - $tax),2)).'</b></td>
		<td align = "center"><b>Total Deductions : PHP '.round(($absent_deduction + $undertime_ammount + $late_deduction + ($sss_loan + $hdmf_loan + $phic_loan + $staff_loan) + $sss + $pagibig + $philhealth),2).'</b></td>
	</tr>
</table>
<br/>
<br/>
<div style="text-align:right"><b>Net Pay : PHP '.number_format(round((($basic_rate + $overtime_ammount + $basic_allowance - $tax)-($absent_deduction + $undertime_ammount + $late_deduction + ($sss_loan + $hdmf_loan + $phic_loan + $staff_loan) + $sss + $pagibig + $philhealth) + $salary_adjustment),2)).'</b></div>
<div style="text-align:left">
	Prepared by: <br/> 
	<br />
	<br />
	<br /><br/>
	<br/>
	Payroll Accountant
</div>
<br />
<br />
<br />

';
$xxx = $xxx + 1;
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
