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

$from_to_query = mysql_query("SELECT * FROM tbl_payslip WHERE company_id = '".$_SESSION['company']."' ORDER BY payslip_id DESC");
$row_from_to = mysql_fetch_array($from_to_query);
$from = $row_from_to['from_date'];
$to = $row_from_to['to_date'];

$no_days = mysql_query("SELECT DISTINCT date FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to'");
$count_days = mysql_num_rows($no_days);

$comp_from_date = date("F d, Y", strtotime($from));
$comp_to_date = date("F d, Y", strtotime($to));

$html ='';

				//$qry_log = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$employee_id'");
				$qry_log = mysql_query("SELECT * FROM tbl_employee WHERE inactive != '1' AND company_id = '".$_SESSION['company']."'");
				$xxx = 0;
				while($row_log = mysql_fetch_array($qry_log)){
				$main_id = $row_log['id'];
				$employee_id = $row_log['employee_id'];
				$id = $row_log['id'];
				$fullname = $row_log['fullname'];
				$sick_leave = $row_log['sick_leave'];
				$vacation_leave = $row_log['vacation_leave'];
				
				$qry_absent = mysql_query("SELECT DISTINCT date,emp_id FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to' AND emp_id = '$employee_id'");
				$count_present = mysql_num_rows($qry_absent);
				
				$qry_overtime = mysql_query("SELECT SUM(hours) AS total_hours FROM tbl_overtime WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to' AND employee_id = '$employee_id'");
				$row_overtime = mysql_fetch_array($qry_overtime);
				
				$total_hour_overtime = $row_overtime['total_hours'];
				
				$no_days = mysql_query("SELECT DISTINCT date,emp_id FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to' AND emp_id = '$employee_id'");
				$total_min_late = 0;
				while($row_days = mysql_fetch_array($no_days)){
					$days_date = $row_days['date'];
					$days_emp_id = $row_days['emp_id'];
					$qry_timein = mysql_query("SELECT * FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$days_date' AND emp_id = '$days_emp_id' AND status = 'Attendance' AND action = 'In' ORDER BY time ASC");
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
						if($_SESSION['company'] == 2 || $_SESSION['company'] == 3){
						$total_min_late = 0;
						}else{
						$total_min_late = $total_min_late + $min_late;
						}
						
				}
				$count_absent = $count_days - $count_present;
				
				$emp_info_qry = mysql_query("SELECT * FROM tbl_employee_info WHERE employee_id = '$employee_id'");
				$count_info = mysql_num_rows($emp_info_qry);
				$row_info = mysql_fetch_array($emp_info_qry);
				
				$emp_allowance_qry = mysql_query("SELECT * FROM tbl_allowance WHERE emp_id = '$main_id'");
				$count_allowance = mysql_num_rows($emp_allowance_qry);
				
				$emp_sum_allowance_qry = mysql_query("SELECT SUM(allowance_price) FROM tbl_allowance WHERE emp_id = '$main_id'");
				$count_sum_allowance = mysql_num_rows($emp_sum_allowance_qry);
				$row_sum_allowance = mysql_fetch_array($emp_sum_allowance_qry);
				
				if($count_info == 0){
					$basic_pay = 0;
				}else{
					$basic_pay = $row_info['basic_salary'];
				}
				
				if($count_allowance == 0){
					$basic_allowance = 0;
				}else{
					$basic_allowance = $row_sum_allowance['SUM(allowance_price)'];
					$basic_allowance = $basic_allowance / 2;
				}
				
				
				// OTHER DEDUCTIONS //
					$basic_tax = $row_info['basic_tax'];
					$basic_tax = $basic_tax / 2;
					$qry_deduction = mysql_query("SELECT SUM(deduction_price) AS total_deduction FROM tbl_deduction WHERE emp_id = '$id'");
					$row_deduction = mysql_fetch_array($qry_deduction);
					$other_deduction_total = $row_deduction['total_deduction'];
					$new_other_deduction_total = $other_deduction_total;
				// END OTHER DEDUCTIONS //
				
				$cutoff_pay = $basic_pay / 2;
				
				//$total_payment = $cutoff_pay - $basic_tax;
				//$total_payment = $total_payment + $basic_allowance;
				
				// PER DAY OF Employee //
					$perday_pay = $basic_pay / 22;
					$absent_deduction = $perday_pay * $count_absent;
				// PER HOUR of Employee //
					$perhour_pay = $perday_pay / 8;
				// PER MINUTE of Employee //
					$perminute_pay = $perhour_pay / 60;
					$late_deduction = $perminute_pay * $total_min_late;
					
					//Overtime Pay//
					$overtime_pay = $total_hour_overtime * 1.25;
					$overtime_pay = $overtime_pay * $perhour_pay;
					
					
					
				$total_deduction_no_mandatory = $late_deduction + $absent_deduction + $new_other_deduction_total;
				
				$final_pay_computed_for_mandatory = $cutoff_pay + $overtime_pay - $total_deduction_no_mandatory;
				// SSS COMPUTATION //
					if($final_pay_computed_for_mandatory >= 7875){
						$sss = 291;
					}else if($final_pay_computed_for_mandatory >= 7625 && $final_pay_computed_for_mandatory <= 7874){
						$sss = 282;
					}else if($final_pay_computed_for_mandatory >= 7375 && $final_pay_computed_for_mandatory <= 7624){
						$sss = 273;
					}else if($final_pay_computed_for_mandatory >= 7125 && $final_pay_computed_for_mandatory <= 7374){
						$sss = 264;
					}else if($final_pay_computed_for_mandatory >= 6875 && $final_pay_computed_for_mandatory <= 7124){
						$sss = 254;
					}else if($final_pay_computed_for_mandatory >= 6625 && $final_pay_computed_for_mandatory <= 6874){
						$sss = 245;
					}else{
						$sss = 236;
					}
				// END SSS COMPUTATION //

				$new_final_pay_computed_for_mandatory = $final_pay_computed_for_mandatory * 2;
				
				if($new_final_pay_computed_for_mandatory >= 35000){
					$philhealth = 438;
				}else if($new_final_pay_computed_for_mandatory >= 34000 && $new_final_pay_computed_for_mandatory <= 34999){
					$philhealth = 425;
				}else if($new_final_pay_computed_for_mandatory >= 33000 && $new_final_pay_computed_for_mandatory <= 33999){
					$philhealth = 412;
				}else if($new_final_pay_computed_for_mandatory >= 32000 && $new_final_pay_computed_for_mandatory <= 32999){
					$philhealth = 400;
				}else if($new_final_pay_computed_for_mandatory >= 31000 && $new_final_pay_computed_for_mandatory <= 31999){
					$philhealth = 387;
				}else if($new_final_pay_computed_for_mandatory >= 30000 && $new_final_pay_computed_for_mandatory <= 30999){
					$philhealth = 375;
				}else if($new_final_pay_computed_for_mandatory >= 29000 && $new_final_pay_computed_for_mandatory <= 29999){
					$philhealth = 362;
				}else if($new_final_pay_computed_for_mandatory >= 28000 && $new_final_pay_computed_for_mandatory <= 28999){
					$philhealth = 350;
				}else if($new_final_pay_computed_for_mandatory >= 27000 && $new_final_pay_computed_for_mandatory <= 27999){
					$philhealth = 337;
				}else if($new_final_pay_computed_for_mandatory >= 26000 && $new_final_pay_computed_for_mandatory <= 26999){
					$philhealth = 325;
				}else if($new_final_pay_computed_for_mandatory >= 25000 && $new_final_pay_computed_for_mandatory <= 25999){
					$philhealth = 312;
				}else if($new_final_pay_computed_for_mandatory >= 24000 && $new_final_pay_computed_for_mandatory <= 24999){
					$philhealth = 300;
				}else if($new_final_pay_computed_for_mandatory >= 23000 && $new_final_pay_computed_for_mandatory <= 23999){
					$philhealth = 288;
				}else if($new_final_pay_computed_for_mandatory >= 22000 && $new_final_pay_computed_for_mandatory <= 22999){
					$philhealth = 275;
				}else if($new_final_pay_computed_for_mandatory >= 21000 && $new_final_pay_computed_for_mandatory <= 21999){
					$philhealth = 262;
				}else if($new_final_pay_computed_for_mandatory >= 20000 && $new_final_pay_computed_for_mandatory <= 20999){
					$philhealth = 250;
				}else if($new_final_pay_computed_for_mandatory >= 19000 && $new_final_pay_computed_for_mandatory <= 19999){
					$philhealth = 237;
				}else if($new_final_pay_computed_for_mandatory >= 18000 && $new_final_pay_computed_for_mandatory <= 18999){
					$philhealth = 225;
				}else if($new_final_pay_computed_for_mandatory >= 17000 && $new_final_pay_computed_for_mandatory <= 17999){
					$philhealth = 212;
				}else if($new_final_pay_computed_for_mandatory >= 16000 && $new_final_pay_computed_for_mandatory <= 16999){
					$philhealth = 200;
				}else if($new_final_pay_computed_for_mandatory >= 15000 && $new_final_pay_computed_for_mandatory <= 15999){
					$philhealth = 188;
				}else if($new_final_pay_computed_for_mandatory >= 14000 && $new_final_pay_computed_for_mandatory <= 14999){
					$philhealth = 175;
				}else if($new_final_pay_computed_for_mandatory >= 13000 && $new_final_pay_computed_for_mandatory <= 13999){
					$philhealth = 163;
				}else if($new_final_pay_computed_for_mandatory >= 12000 && $new_final_pay_computed_for_mandatory <= 12999){
					$philhealth = 150;
				}else if($new_final_pay_computed_for_mandatory >= 11000 && $new_final_pay_computed_for_mandatory <= 11999){
					$philhealth = 138;
				}else if($new_final_pay_computed_for_mandatory >= 10000 && $new_final_pay_computed_for_mandatory <= 10999){
					$philhealth = 125;
				}else if($new_final_pay_computed_for_mandatory >= 9000 && $new_final_pay_computed_for_mandatory <= 9999){
					$philhealth = 113;
				}else{
					$philhealth = 100;
				}
				
					$philhealth = $philhealth / 2;
					$pagibig = "50";
					
					
				//END PHILHEALTH COMPUTATION//
				$total_deduction = $late_deduction + $absent_deduction + $philhealth + $sss + $pagibig;
				
				$final_basic_pay = $cutoff_pay + $overtime_pay - $total_deduction;
				
				$bracket1 = 4167/2;
				$bracket2 = 5000/2;
				$bracket3 = 6667/2;
				$bracket4 = 10000/2;
				$bracket5 = 15833/2;
				$bracket6 = 25000/2;
				$bracket7 = 45833/2;
				
				if($final_basic_pay > $bracket7){
					//$diffe = $tax_pay - $bracket7;
					$diffe = (($final_basic_pay - $bracket7) * .32) + (10416.67/2);
					$diffe = round($diffe);
				}else if(($final_basic_pay > $bracket6) && ($final_basic_pay < $bracket7)){
					$diffe = (($final_basic_pay - $bracket6) * .30) + (4166.67/2);
					$diffe = round($diffe);
				}else if(($final_basic_pay > $bracket5) && ($final_basic_pay < $bracket6)){
					$diffe = (($final_basic_pay - $bracket5) * .25) + (1875/2);
					$diffe = round($diffe);
				}else if(($final_basic_pay > $bracket4) && ($final_basic_pay < $bracket5)){
					$diffe = (($final_basic_pay - $bracket4) * .20) + (708.33/2);
					$diffe = round($diffe);
				}else if(($final_basic_pay > $bracket3) && ($final_basic_pay < $bracket4)){
					$diffe = (($final_basic_pay - $bracket3) * .15) + (208.33/2);
					$diffe = round($diffe);
				}else if(($final_basic_pay > $bracket2) && ($final_basic_pay < $bracket3)){
					$diffe = (($final_basic_pay - $bracket2) * .10) + (41.67/2);
					$diffe = round($diffe);
				}else if(($final_basic_pay > $bracket1) && ($final_basic_pay < $bracket2)){
					$diffe = (($final_basic_pay - $bracket1) * .5) + 0;
					$diffe = round($diffe);
				}else if($final_basic_pay < $bracket1){
					$diffe = $final_basic_pay;
				}
				
				$total_payment = $cutoff_pay + $overtime_pay - $diffe + $basic_allowance;
				
				$total_gross = $total_payment - $total_deduction;

// Set some content to print



if($xxx == 2){
	$html .='<br pagebreak="true"/>';
	$xxx = 0;
}
$html .='
<div style="text-align:center"><b>Tapdash Heuristics</b></div>
'.$fullname.'<br>
Cut Off Period : '.$comp_from_date.' To '.$comp_to_date.'<br/>
Number of Working days : '.$count_days.'<br/>
Number of days present : '.$count_present.'<br/>
Late : '.$total_min_late.' minute/s<br/>
Vacation Leave : '.$vacation_leave.' remaining<br/>
Sick Leave : '.$sick_leave.' remaining<br/><br/>
<table border="1" cellpadding="3" >
	<tr>
		<th align = "center">Payments</th>
		<th align = "center">Deductions</th>
	</tr>
	<tr>
		<td>
			Basic Payment : PHP '.number_format($cutoff_pay).'.00 <br/>
			Overtime Pay : PHP '.number_format($overtime_pay).'.00 <br/>
			Tax Payable : PHP '.number_format($diffe).'.00 <br/><br/>
			Total Allowance : PHP '.number_format($basic_allowance).'.00 <br/><br/>

		</td>
		<td align = "right">
		Absent Deduction : PHP '.round($absent_deduction).' .00 <br/>
		Late Deduction : PHP '.round($late_deduction).' .00 <br/>
		Other Deduction : PHP '.round($new_other_deduction_total).' .00 <br/>
		SSS : PHP '.round($sss).' .00 <br/>
		PAGIBIG : PHP '.round($pagibig).' .00 <br/>
		PhilHealth : PHP '.round($philhealth).' .00 <br/>
		
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
