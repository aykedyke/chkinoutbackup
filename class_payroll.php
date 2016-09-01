<?php
				$payfrom_strtotime = strtotime($payfrom_date);
				
				$main_id = $row_log['id'];
				$employee_id = $row_log['employee_id'];
				$id = $row_log['id'];
				$fullname = $row_log['fullname'];
				$sick_leave = $row_log['sick_leave'];
				$vacation_leave = $row_log['vacation_leave'];
				$dependents = $row_log['dependents'];
				$salary_adjustment = $row_log['salary_adjustment'];
				
				/// sss loan duration //
				$fromsss_loan = $row_log['fromsss_loan'];
				$tosss_loan = $row_log['tosss_loan'];
				$fromsss_strtotime = strtotime($fromsss_loan);
				$tosss_strtotime = strtotime($tosss_loan);
				if($tosss_strtotime >= $payfrom_strtotime && $fromsss_strtotime <= $payfrom_strtotime){
					$sss_loan = $row_log['sss_loan'];
				}else{
					$sss_loan = "";
				}
				
				/// hdmf loan duration ///
				$fromhdmf_loan = $row_log['fromhdmf_loan'];
				$tohdmf_loan = $row_log['tohdmf_loan'];
				$fromhdmf_strtotime = strtotime($fromhdmf_loan);
				$tohdmf_strtotime = strtotime($tohdmf_loan);
				if($tohdmf_strtotime >= $payfrom_strtotime && $fromhdmf_strtotime <= $payfrom_strtotime){
					$hdmf_loan = $row_log['hdmf_loan'];
				}else{
					$hdmf_loan = "";
				}
				
				$phic_loan = $row_log['phic_loan'];
				
				
				
				$fromstaff_loan = $row_log['fromstaff_loan'];
				$tostaff_loan = $row_log['tostaff_loan'];
				$fromstaff_strtotime = strtotime($fromstaff_loan);
				$tostaff_strtotime = strtotime($tostaff_loan);
				if($tostaff_strtotime >= $payfrom_strtotime && $fromstaff_strtotime <= $payfrom_strtotime){
					$staff_loan = $row_log['staff_loan'];
				}else{
					$staff_loan = "";
				}
				
				//$payfrom_date
				//$payto_date
				
				
				
				$qry_absent = mysql_query("SELECT DISTINCT date,emp_id FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to' AND emp_id = '$employee_id'");
				$count_present = 0;
				while($row_no_days = mysql_fetch_array($qry_absent)){
					$date123 = $row_no_days['date'];
					$date_day = date('l', strtotime($date123));
					if($date_day == "Monday" || $date_day == "Tuesday" || $date_day == "Wednesday" || $date_day == "Thursday" || $date_day == "Friday"){
						$count_present = $count_present + 1;
					}else{
					}
				}
				
				$qry_overtime = mysql_query("SELECT SUM(hours) AS total_hours FROM tbl_overtime WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to' AND employee_id = '$employee_id'");
				$row_overtime = mysql_fetch_array($qry_overtime);
				
				$total_hour_overtime = $row_overtime['total_hours'];
				
				/* $qry_undertime = mysql_query("SELECT SUM(hours) AS total_hours FROM tbl_undertime WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to' AND employee_id = '$employee_id'");
				$row_undertime = mysql_fetch_array($qry_undertime);
				
				$total_hour_undertime = $row_undertime['total_hours']; */
				
				$no_days = mysql_query("SELECT DISTINCT date,emp_id FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to' AND emp_id = '$employee_id'");
				$total_min_late = 0;
				while($row_days = mysql_fetch_array($no_days)){
					$days_date = $row_days['date'];
					$days_emp_id = $row_days['emp_id'];
					$qry_timein = mysql_query("SELECT time FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$days_date' AND emp_id = '$days_emp_id' ORDER BY time ASC LIMIT 1");
					$row_timein = mysql_fetch_array($qry_timein);
						$attendance_in = $row_timein['time'];
	
						$startime_qry = mysql_query("SELECT * FROM tbl_timein WHERE company_id = '".$_SESSION['company']."'");
						$row_startime = mysql_fetch_array($startime_qry);						
						$strattendancetime = strtotime($attendance_in);
						$start_time = $row_startime['start_time'];
						$startin = strtotime($start_time);
						if($strattendancetime > $startin){
							$min_late =  ($strattendancetime - $startin);
						}
						else{
							$min_late = 0;
						}
						if($_SESSION['company'] == 2 || $_SESSION['company'] == 3){
						$total_min_late = $total_min_late + $min_late;
						}else{
						$total_min_late = $total_min_late + $min_late;
						}
						
						$total_time_late = date('H:i:s', $total_min_late);
						
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
					$basic_pay = $row_info['basic_salary'];
					$initial1_basic_pay = $row_info['basic_salary'];
				}else{
					$basic_pay = $row_info['basic_salary'];
					$initial1_basic_pay = $row_info['basic_salary'];
				}
				
				if($count_allowance == 0){
					$basic_allowance = 0;
					$basic_allowance_1st = 0;
				}else{
					$basic_allowance_1st = $row_sum_allowance['SUM(allowance_price)'];
					$basic_allowance = $basic_allowance_1st / 2;
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
					$perday_pay = ($basic_pay * 12) / 261;
					$perday_pay2 = ($basic_pay * 12) / 261;
				$basic_pay = $basic_pay + $basic_allowance_1st;
					$absent_deduction = $perday_pay * $count_absent;
				// PER HOUR of Employee //
					$perhour_pay = $perday_pay / 8;
					$perhour_pay2 = $perday_pay2 / 8;
				// PER MINUTE of Employee //
					$perminute_pay = $perhour_pay / 60;
					$persecond_pay = $perminute_pay / 60;
					if($_SESSION['company'] == '2'){
						$late_deduction = $persecond_pay * $total_min_late;
					}else{
						$late_deduction = $persecond_pay * $total_min_late;
					}
					
					//Overtime Pay//
					$overtime_pay = $total_hour_overtime * 1;
					$overtime_pay = $overtime_pay * $perhour_pay2;
					
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
				$total_deduction = $total_deduction_no_mandatory + $philhealth + $sss + $pagibig;
				
				$final_basic_pay = $cutoff_pay + $overtime_pay - $total_deduction;
				
				if($dependents == "1"){
					$bracket7 = 23958;
					$bracket6 = 13542;
					$bracket5 = 8958;
					$bracket4 = 6042;
					$bracket3 = 4375;
					$bracket2 = 3542;
					$bracket1 = 3125;
				}else if($dependents == "2"){
					$bracket7 = 25000;
					$bracket6 = 14583;
					$bracket5 = 10000;
					$bracket4 = 7083;
					$bracket3 = 5417;
					$bracket2 = 4583;
					$bracket1 = 4167;
				}else if($dependents == "3"){
					$bracket7 = 26042;
					$bracket6 = 15625;
					$bracket5 = 11042;
					$bracket4 = 8125;
					$bracket3 = 6458;
					$bracket2 = 5625;
					$bracket1 = 5208;
				}else if($dependents == "4"){
					$bracket7 = 27083;
					$bracket6 = 16657;
					$bracket5 = 12083;
					$bracket4 = 9167;
					$bracket3 = 7500;
					$bracket2 = 6667;
					$bracket1 = 6250;
				}
				else{
					$bracket1 = 4167/2;
					$bracket2 = 5000/2;
					$bracket3 = 6667/2;
					$bracket4 = 10000/2;
					$bracket5 = 15833/2;
					$bracket6 = 25000/2;
					$bracket7 = 45833/2;
				}
				
				if($final_basic_pay > $bracket7){
					//$diffe = $tax_pay - $bracket7;
					$diffe = (($final_basic_pay - $bracket7) * .32) + (10416.67/2);
					$diffe = $diffe;
				}else if(($final_basic_pay > $bracket6) && ($final_basic_pay < $bracket7)){
					$diffe = (($final_basic_pay - $bracket6) * .30) + (4166.67/2);
					$diffe = $diffe;
				}else if(($final_basic_pay > $bracket5) && ($final_basic_pay < $bracket6)){
					$diffe = (($final_basic_pay - $bracket5) * .25) + (1875/2);
					$diffe = $diffe;
				}else if(($final_basic_pay > $bracket4) && ($final_basic_pay < $bracket5)){
					$diffe = (($final_basic_pay - $bracket4) * .20) + (708.33/2);
					$diffe = $diffe;
				}else if(($final_basic_pay > $bracket3) && ($final_basic_pay < $bracket4)){
					$diffe = (($final_basic_pay - $bracket3) * .15) + (208.33/2);
					$diffe = $diffe;
				}else if(($final_basic_pay > $bracket2) && ($final_basic_pay < $bracket3)){
					$diffe = (($final_basic_pay - $bracket2) * .10) + (41.67/2);
					$diffe = $diffe;
				}else if(($final_basic_pay > $bracket1) && ($final_basic_pay < $bracket2)){
					$diffe = (($final_basic_pay - $bracket1) * .5) + 0;
					$diffe = $diffe;
				}else if($final_basic_pay < $bracket1){
					$diffe = $final_basic_pay;
				}
				
				$total_payment = $cutoff_pay + $overtime_pay - $diffe + $basic_allowance;
				
				$total_gross = $total_payment - $total_deduction;

				$basic_rate = $initial1_basic_pay / 2;
				
				$overtime_ammount = ((((($initial1_basic_pay / 2) + $basic_allowance) / $count_days) / 8) * 1) * $total_hour_overtime;
				//$overtime_ammount = 0;
				
				//$undertime_ammount = ((((($initial1_basic_pay / 2) + $basic_allowance) / $count_days) / 8) * 1) * $total_hour_undertime;
				//$undertime_ammount = 0;
				
				$absent_ammount = (((($initial1_basic_pay / 2) + $basic_allowance) / $count_days) / 8) * ($count_absent * 8);
				//$absent_ammount = 0;
				
				$gross = $basic_rate + $overtime_ammount - $absent_deduction - $sss_loan - $hdmf_loan - $phic_loan - $staff_loan - $late_deduction;
				
				
				// SSS COMPUTATION //
					if($basic_rate >= 7875){
						$sss = 290.65;
						$sss_er = 589.35;
						$sss_ec = 15;
					}else if($basic_rate >= 7625 && $basic_rate <= 7874){
						$sss = 281.6;
						$sss_er = 570.90;
						$sss_ec = 15;
					}else if($basic_rate >= 7375 && $basic_rate <= 7624){
						$sss = 272.5;
						$sss_er = 552.5;
						$sss_ec = 15;
					}else if($basic_rate >= 7125 && $basic_rate <= 7374){
						$sss = 263.4;
						$sss_er = 552.5;
						$sss_ec = 5;
					}else if($basic_rate >= 6875 && $basic_rate <= 7124){
						$sss = 254.35;
						$sss_er = 515.65;
						$sss_ec = 5;
					}else if($basic_rate >= 6625 && $basic_rate <= 6874){
						$sss = 245.25;
						$sss_er = 497.25;
						$sss_ec = 5;
					}else if($basic_rate >= 6375 && $basic_rate <= 6624){
						$sss = 454.20 / 2;
						$sss_er = 920.80 / 2;
						$sss_ec = 5;
					}else if($basic_rate >= 5875 && $basic_rate <= 6374){
						$sss = 436.00 / 2;
						$sss_er = 884.00 / 2;
						$sss_ec = 5;
					}else if($basic_rate >= 5625 && $basic_rate <= 5874){
						$sss = 417.80 / 2;
						$sss_er = 847.20 / 2;
						$sss_ec = 5;
					}else if($basic_rate >= 5375 && $basic_rate <= 5624){
						$sss = 399.70 / 2;
						$sss_er = 810.30 / 2;
						$sss_ec = 5;
					}else if($basic_rate >= (10250/2) && $basic_rate <= (10749/2)){
						$sss = 381.50 / 2;
						$sss_er = 773.50 / 2;
						$sss_ec = 5;
					}else if($basic_rate >= (9750/2) && $basic_rate <= (10249/2)){
						$sss = 363.30 / 2;
						$sss_er = 736.70 / 2;
						$sss_ec = 5;
					}else if($basic_rate >= (9250/2) && $basic_rate <= (9749/2)){
						$sss = 345.20 / 2;
						$sss_er = 699.80 / 2;
						$sss_ec = 5;
					}else if($basic_rate >= (8750/2) && $basic_rate <= (9249/2)){
						$sss = 327 / 2;
						$sss_er = 663 / 2;
						$sss_ec = 5;
					}else if($basic_rate >= (8250/2) && $basic_rate <= (8749/2)){
						$sss = 308.80 / 2;
						$sss_er = 626.20 / 2;
						$sss_ec = 5;
					}else if($basic_rate >= (7750/2) && $basic_rate <= (8249/2)){
						$sss = 290.70 / 2;
						$sss_er = 589.30 / 2;
						$sss_ec = 5;
					}else if($basic_rate >= (7250/2) && $basic_rate <= (7749/2)){
						$sss = 272.50 / 2;
						$sss_er = 552.50 / 2;
						$sss_ec = 5;
					}else if($basic_rate >= (6750/2) && $basic_rate <= (7249/2)){
						$sss = 254.30 / 2;
						$sss_er = 515.70 / 2;
						$sss_ec = 5;
					}else if($basic_rate >= (6250/2) && $basic_rate <= (6749/2)){
						$sss = 236.20 / 2;
						$sss_er = 478.80 / 2;
						$sss_ec = 5;
					}else if($basic_rate >= (5750/2) && $basic_rate <= (6249/2)){
						$sss = 218 / 2;
						$sss_er = 442 / 2;
						$sss_ec = 5;
					}else if($basic_rate >= (5250/2) && $basic_rate <= (5749/2)){
						$sss = 199.80 / 2;
						$sss_er = 405.20 / 2;
						$sss_ec = 5;
					}else if($basic_rate >= (4750/2) && $basic_rate <= (5249/2)){
						$sss = 181.70 / 2;
						$sss_er = 368.30 / 2;
						$sss_ec = 5;
					}else if($basic_rate >= (4250/2) && $basic_rate <= (4749/2)){
						$sss = 163.50 / 2;
						$sss_er = 331.50 / 2;
						$sss_ec = 5;
					}
				// END SSS COMPUTATION //
				
				$gross_2 = $gross * 2;
				$basic_rate_2 = $basic_rate * 2;
				
				if($basic_rate_2 >= 35000){
					$philhealth = 438;
				}else if($basic_rate_2 >= 34000 && $basic_rate_2 <= 34999){
					$philhealth = 425;
				}else if($basic_rate_2 >= 33000 && $basic_rate_2 <= 33999){
					$philhealth = 412;
				}else if($basic_rate_2 >= 32000 && $basic_rate_2 <= 32999){
					$philhealth = 400;
				}else if($basic_rate_2 >= 31000 && $basic_rate_2 <= 31999){
					$philhealth = 387;
				}else if($basic_rate_2 >= 30000 && $basic_rate_2 <= 30999){
					$philhealth = 375;
				}else if($basic_rate_2 >= 29000 && $basic_rate_2 <= 29999){
					$philhealth = 362;
				}else if($basic_rate_2 >= 28000 && $basic_rate_2 <= 28999){
					$philhealth = 350;
				}else if($basic_rate_2 >= 27000 && $basic_rate_2 <= 27999){
					$philhealth = 337;
				}else if($basic_rate_2 >= 26000 && $basic_rate_2 <= 26999){
					$philhealth = 325;
				}else if($basic_rate_2 >= 25000 && $basic_rate_2 <= 25999){
					$philhealth = 312;
				}else if($basic_rate_2 >= 24000 && $basic_rate_2 <= 24999){
					$philhealth = 300;
				}else if($basic_rate_2 >= 23000 && $basic_rate_2 <= 23999){
					$philhealth = 288;
				}else if($basic_rate_2 >= 22000 && $basic_rate_2 <= 22999){
					$philhealth = 275;
				}else if($basic_rate_2 >= 21000 && $basic_rate_2 <= 21999){
					$philhealth = 262;
				}else if($basic_rate_2 >= 20000 && $basic_rate_2 <= 20999){
					$philhealth = 250;
				}else if($basic_rate_2 >= 19000 && $basic_rate_2 <= 19999){
					$philhealth = 237;
				}else if($basic_rate_2 >= 18000 && $basic_rate_2 <= 18999){
					$philhealth = 225;
				}else if($basic_rate_2 >= 17000 && $basic_rate_2 <= 17999){
					$philhealth = 212;
				}else if($basic_rate_2 >= 16000 && $basic_rate_2 <= 16999){
					$philhealth = 200;
				}else if($basic_rate_2 >= 15000 && $basic_rate_2 <= 15999){
					$philhealth = 188;
				}else if($basic_rate_2 >= 14000 && $basic_rate_2 <= 14999){
					$philhealth = 175;
				}else if($basic_rate_2 >= 13000 && $basic_rate_2 <= 13999){
					$philhealth = 163;
				}else if($basic_rate_2 >= 12000 && $basic_rate_2 <= 12999){
					$philhealth = 150;
				}else if($basic_rate_2 >= 11000 && $basic_rate_2 <= 11999){
					$philhealth = 138;
				}else if($basic_rate_2 >= 10000 && $basic_rate_2 <= 10999){
					$philhealth = 125;
				}else if($basic_rate_2 >= 9000 && $basic_rate_2 <= 9999){
					$philhealth = 113;
				}else{
					$philhealth = 100;
				}
				
					$philhealth = $philhealth / 2;
					
					$gross_final = $gross - $philhealth - $sss - 50;
				
				if($gross_final > $bracket7){
					$diffe = (($gross_final - $bracket7) * .32) + (10416.67/2);
					$diffe = $diffe;
				}else if(($gross_final > $bracket6) && ($gross_final < $bracket7)){
					$diffe = (($gross_final - $bracket6) * .30) + (4166.67/2);
					$diffe = $diffe;
				}else if(($gross_final > $bracket5) && ($gross_final < $bracket6)){
					$diffe = (($gross_final - $bracket5) * .25) + (1875/2);
					$diffe = $diffe;
				}else if(($gross_final > $bracket4) && ($gross_final < $bracket5)){
					$diffe = (($gross_final - $bracket4) * .20) + (708.33/2);
					$diffe = $diffe;
				}else if(($gross_final > $bracket3) && ($gross_final < $bracket4)){
					$diffe = (($gross_final - $bracket3) * .15) + (208.33/2);
					$diffe = $diffe;
				}else if(($gross_final > $bracket2) && ($gross_final < $bracket3)){
					$diffe = (($gross_final - $bracket2) * .10) + (41.67/2);
					$diffe = $diffe;
				}else if(($gross_final > $bracket1) && ($gross_final < $bracket2)){
					$diffe = (($gross_final - $bracket1) * .5) + 0;
					$diffe = $diffe;
				}else if($gross_final < $bracket1){
					$diffe = $gross_final;
				}
				
				$tax = $diffe;
?>