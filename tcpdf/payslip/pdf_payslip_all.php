<?php
ob_start();
session_start();
if(!isset($_SESSION['admin'])){
	header('location:http://tapdashheuristics.com/projects/attendance/login.php');
}
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

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Esco Philippines');
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



$html ='';

				while($row_payroll = mysql_fetch_array($payroll_qry)){
					if($row_payroll['salary_adjustment'] == ""){
						$row_payroll['salary_adjustment'] = 0;
					}

// Set some content to print
if($xxx == 2){
	$html .='<br pagebreak="true"/>';
	$xxx = 0;
}
$html .='
<div style="text-align:center"><b>Payslip</b></div>
'.$row_payroll['employee_name'].'<br>
Payroll Period : '.$payroll_from.' To '.$payroll_to.'<br/>
Number of Working days : '.$row_payroll1['no_of_days'].'<br/>
Number of days present : '.$row_payroll['days_present'].'<br/>

<table border="1" cellpadding="3" >
	<tr>
		<th align = "center">Payments</th>
		<th align = "center">Deductions</th>
	</tr>
	<tr>
		<td>
			Basic Payment : PHP '.number_format($row_payroll['semi_monthly_basic']).'<br/>
			Salary Adjustment : PHP '.number_format($row_payroll['salary_adjustment']).'<br/>
			Overtime Pay : PHP '.number_format($row_payroll['ot_ammount']).'<br/>
			Tax Payable : PHP '.number_format($row_payroll['tax']).'<br/><br/>
			Total Allowance : PHP '.number_format($row_payroll['semi_monthly_allowance']).'<br/><br/>

		</td>
		<td align = "right">
		Absent Deduction : PHP '.number_format($row_payroll['ut_ammount']).'<br/>
		Late Deduction : PHP <br/>
		Other Deduction / Loan : PHP '.round((number_format($row_payroll['sss_loan']) + number_format($row_payroll['hdmf_loan']) + number_format($row_payroll['phic_loan']) + number_format($row_payroll['staff_loan'])),2).'<br/>
		SSS : PHP '.number_format($row_payroll['sss_ee']).'<br/>
		PAGIBIG : PHP '.number_format($row_payroll['hdmf_ee']).'<br/>
		PhilHealth : PHP '.number_format($row_payroll['phic_ee']).'<br/>
		</td>
	</tr>
	<tr>
		<td align = "center"><b>Total Payment : PHP '.number_format(round(($row_payroll['semi_monthly_basic'] + $row_payroll['ot_ammount'] + $row_payroll['semi_monthly_allowance'] - number_format($row_payroll['tax'])),2)).'</b></td>
		<td align = "center"><b>Total Deductions : PHP '.round(number_format($row_payroll['total_deductions']),2).'</b></td>
	</tr>
</table>
<br/>
<br/>
<div style="text-align:right"><b>Net Pay : PHP '.round(number_format($row_payroll['net_pay']),2).'</b></div>
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
