<?php

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$emp_id = $_POST['emp_id'];

$from_date = mysql_query("SELECT * FROM tbl_logs ORDER BY log_id ASC");
$row_from = mysql_fetch_array($from_date);
$to_date = mysql_query("SELECT * FROM tbl_logs ORDER BY log_id DESC");
$row_to = mysql_fetch_array($to_date);

$from = $row_from['date'];
$to = $row_to['date'];

$no_days = mysql_query("SELECT DISTINCT date FROM tbl_logs WHERE date BETWEEN '$from' and '$to'");
$count_days = mysql_num_rows($no_days);

				$qry_log = mysql_query("SELECT * FROM tbl_employee where employee_id = '$emp_id'");
				$row_log = mysql_fetch_array($qry_log);
				$employee_id = $row_log['employee_id'];
				$fullname = $row_log['fullname'];
				$qry_absent = mysql_query("SELECT DISTINCT date,emp_id FROM tbl_logs WHERE date BETWEEN '$from' and '$to' AND emp_id = '$employee_id'");
				$count_present = mysql_num_rows($qry_absent);
				$number_absent = $count_days - $count_present;
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
						$data = array('status' => "Success",
									'Employee ID' => $employee_id,
									'Fullname' => $fullname,
									'Present Days' => $count_present,
									'Absent Days' => $number_absent,
									'Total Minutes of Late' => $total_min_late
									 );
									 
						print json_encode($data); 
				
?>