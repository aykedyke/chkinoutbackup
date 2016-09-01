<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

			$company = $_POST['company_id'];
			$employee_id = $_POST['employee_id'];
			
			if($company == ""){
				$comp_qry = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$employee_id'");
				$row_comp = mysql_fetch_array($comp_qry);
				$company = $row_comp['company_id'];
			}
		
		$qry_tbl_comment = mysql_query("SELECT * FROM tbl_leave WHERE approve = '1' AND company_id = '$company'");
		
		$arr = array();
		
			while($rows = mysql_fetch_assoc($qry_tbl_comment))
				{
					$approve = $rows['approve'];
					$date_filed = $rows['date_filed'];
					$emp_id = $rows['emp_id'];
					$from_date = $rows['from_date'];
					$fullname = $rows['fullname'];
					$leave_id = $rows['leave_id'];
					$no_days = $rows['no_days'];
					$reason = $rows['reason'];
					$to_date = $rows['to_date'];
					$type_leave = $rows['type_leave'];
					
					$emp_query = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$emp_id'");
					$row_emp = mysql_fetch_array($emp_query);
					$dept_id = $row_emp['department_id'];
					
					$dep_query = mysql_query("SELECT * FROM tbl_department WHERE department_id = '$dept_id'");
					$row_dep = mysql_fetch_array($dep_query);
					$dept_name = $row_dep['department_name'];
					
					
					$data[] = array("approve" => $approve,
								  "date_filed" => $date_filed,
								  "emp_id" => $emp_id,
								  "from_date" => $from_date,
								  "fullname" => $fullname,
								  "Department" => $dept_name,
								  "leave_id" => $leave_id,
								  "no_days" => $no_days,
								  "reason" => $reason,
								  "to_date" => $to_date,
								  "type_leave" => $type_leave
								  );
				}
							 
				print json_encode($data);

?>