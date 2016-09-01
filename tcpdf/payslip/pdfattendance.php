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

//error_reporting(0);
$from = $_GET['from'];
$to = $_GET['to'];

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
$html .='
<div style="text-align:center"><b>Attendance</b></div>

<table border="1" cellpadding="1" >
	<tr>
		<th align = "center">Date</th>
		<th align = "center">Employee ID</th>
		<th align = "center">Fullname</th>
		<th align = "center">Time IN</th>
		<th align = "center">Time Out</th>
	</tr>
';
/* $qry_log = mysql_query("SELECT DISTINCT 
										tbl_logs.emp_id AS mostemp,
										tbl_logs.date AS dated,
										tbl_employee.inactive,
										tbl_employee.fullname
										FROM 
										tbl_logs,
										tbl_employee
										WHERE 
										tbl_employee.employee_id = tbl_logs.emp_id
										AND
										tbl_employee.inactive = '0'
										AND
										tbl_logs.company_id = '".$_SESSION['company']."'
										AND
										tbl_logs.date BETWEEN '$from' and '$to'
										ORDER BY tbl_logs.date, tbl_employee.fullname LIMIT 5");
				while($row_log = mysql_fetch_array($qry_log)){
				$employee_id = $row_log['mostemp'];
				$date = $row_log['dated'];
				$fullname = $row_log['fullname'];
				$qry_timein = mysql_query("SELECT time FROM tbl_logs USE INDEX (emp_id,date) WHERE date = '$date' AND emp_id = '$employee_id' ORDER BY time ASC LIMIT 1");
					$row_timein = mysql_fetch_array($qry_timein);
					$attendance_in = $row_timein['time'];
					$qry_timeout = mysql_query("SELECT time FROM tbl_logs USE INDEX (emp_id,date,action) WHERE date = '$date' AND emp_id = '$employee_id' AND action = 'Out' ORDER BY time DESC LIMIT 1");
					$row_timeout = mysql_fetch_array($qry_timeout);
					$attendance_out = $row_timeout['time']; */
// Set some content to print
$html .='
	<tr>
		<td>1</th>
		<td>'.$employee_id.'</th>
		<td>'.$fullname.'</th>
		<td>'.$attendance_in.'</th>
		<td>'.$attendance_out.'</th>
	</tr>
';
$html .='
	<tr>
		<td>1</th>
		<td>'.$employee_id.'</th>
		<td>'.$fullname.'</th>
		<td>'.$attendance_in.'</th>
		<td>'.$attendance_out.'</th>
	</tr>
';
/* } */
$html .='
</table>
';
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
