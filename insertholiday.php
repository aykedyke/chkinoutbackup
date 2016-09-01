<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

 $emp_query = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = 'TH14-0022'");
while($row_emp = mysql_fetch_array($emp_query)){
	$employee_id = $row_emp['employee_id']; 
	mysql_query("INSERT INTO tbl_logs (emp_id, status, action, time, date, company_id) VALUES ('$employee_id','Attendance','In','08:00:00','2016-03-15','1')");
	mysql_query("INSERT INTO tbl_logs (emp_id, status, action, time, date, company_id) VALUES ('$employee_id','Attendance','In','08:00:00','2016-03-16','1')");
	mysql_query("INSERT INTO tbl_logs (emp_id, status, action, time, date, company_id) VALUES ('$employee_id','Attendance','In','08:00:00','2016-03-17','1')");
	mysql_query("INSERT INTO tbl_logs (emp_id, status, action, time, date, company_id) VALUES ('$employee_id','Attendance','In','08:00:00','2016-03-18','1')");
	mysql_query("INSERT INTO tbl_logs (emp_id, status, action, time, date, company_id) VALUES ('$employee_id','Attendance','In','08:00:00','2016-03-21','1')");
	mysql_query("INSERT INTO tbl_logs (emp_id, status, action, time, date, company_id) VALUES ('$employee_id','Attendance','In','08:00:00','2016-03-22','1')");
	//mysql_query("INSERT INTO tbl_logs (emp_id, status, action, time, date, company_id) VALUES ('$employee_id','Attendance','In','08:00:00','2016-03-23','1')");
	mysql_query("INSERT INTO tbl_logs (emp_id, status, action, time, date, company_id) VALUES ('$employee_id','Attendance','In','08:00:00','2016-03-24','1')");
	mysql_query("INSERT INTO tbl_logs (emp_id, status, action, time, date, company_id) VALUES ('$employee_id','Attendance','In','08:00:00','2016-03-25','1')");
	mysql_query("INSERT INTO tbl_logs (emp_id, status, action, time, date, company_id) VALUES ('$employee_id','Attendance','In','08:00:00','2016-03-28','1')");
	mysql_query("INSERT INTO tbl_logs (emp_id, status, action, time, date, company_id) VALUES ('$employee_id','Attendance','In','08:00:00','2016-03-29','1')");
	mysql_query("INSERT INTO tbl_logs (emp_id, status, action, time, date, company_id) VALUES ('$employee_id','Attendance','In','08:00:00','2016-03-30','1')");
	
	echo 1;
 } 
?>