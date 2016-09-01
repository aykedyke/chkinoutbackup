<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}

$leave_qry = mysql_query("SELECT * FROM tbl_leave WHERE leave_id = '".$_GET['id']."'");
$row_leave = mysql_fetch_array($leave_qry);
if(isset($_POST['approve'])){
	mysql_query("UPDATE tbl_leave SET approve = '1' WHERE leave_id = '".$_GET['id']."'");
	
	$strDateFrom = $_POST['from_date'];
	$strDateTo = $_POST['to_date'];
	$emp_id = $_POST['emp_id'];
	
	$emp_qry = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$emp_id'");
	$row_qry = mysql_fetch_array($emp_qry);
	
	$sick_leave_count = $row_qry['sick_leave'];
	$vacation_leave_count = $row_qry['vacation_leave'];

	$str_initial = strtotime($strDateFrom);
	$str_final = strtotime($strDateTo);

	$str_between = $str_initial;

	while($str_between <= $str_final){
		$date_between = date('Y-m-d',$str_between);
		$particular_day = date('w', $str_between);
		if($particular_day == 6 || $particular_day == 0){
			
		}else{
			mysql_query("INSERT INTO tbl_leave_days (emp_id,date) VALUES ('$emp_id','$date_between')");
			$check_emp_status = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$emp_id'");
			$row_check_emp_status = mysql_fetch_array($check_emp_status);
			$emp_status = $row_check_emp_status['status'];
			
			if(stripos($emp_status,'regular') === FALSE){
				
			}else{
				if(($sick_leave_count == 0) || ($vacation_leave_count == 0)){
					
				}else{
					
					if(stripos($row_leave['type_leave'],'sick') !== FALSE){
						mysql_query("INSERT INTO tbl_logs (emp_id,status,action,time,date,company_id) VALUES ('$emp_id','Sick Leave','In','08:00:00','$date_between','".$_SESSION['company']."')");
						$final_sick_count = $sick_leave_count - $row_leave['no_days'];
						if($final_sick_count < 0){
							$final_sick_count = 0;
						}
						mysql_query("UPDATE tbl_employee SET sick_leave = '$final_sick_count' WHERE employee_id = '$emp_id'");
					}else if(stripos($row_leave['type_leave'],'vacation') !== FALSE){
						mysql_query("INSERT INTO tbl_logs (emp_id,status,action,time,date,company_id) VALUES ('$emp_id','Vacation Leave','In','08:00:00','$date_between','".$_SESSION['company']."')");
						$final_sick_count = $vacation_leave_count - $row_leave['no_days'];
						if($final_sick_count < 0){
							$final_sick_count = 0;
						}
						mysql_query("UPDATE tbl_employee SET vacation_leave = '$final_sick_count' WHERE employee_id = '$emp_id'");
					}
				}
			}
		}
		$str_between = $str_between + 86400;
	}
	
	echo "<script> alert('Successfully added!');</script>";
	echo "<script>document.location.href='leave_form.php'</script>";
}

if(isset($_POST['disapprove'])){
	mysql_query("DELETE FROM tbl_leave WHERE leave_id = '".$_GET['id']."'");
	echo "<script>document.location.href='leave_form.php'</script>";
}

?>


<?php include('header.php'); ?>

<body>
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Leave Forms</h5>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
    <!-- Main content wrapper -->
    <div class="wrapper">
       <br>
		<div style = "	margin-left: 80px;
						margin-top: 31px;
						min-height: 500px;
						padding: 20px;
						width: 80%;">
						
			<?php
			?>
			<form enctype="multipart/form-data" id="validate" name="frmAdd" method="post" action="" class = "form">
				    <fieldset>  
							<div class="formRow">
								<label><b>Employee ID</b></label>
								<div class="formRight"><?php echo $row_leave['emp_id']; ?></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Name</b></label>
								<div class="formRight"><?php echo $row_leave['fullname']; ?></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Date Filed</b></label>
								<div class="formRight"><?php echo $row_leave['date_filed']; ?></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>From</b></label>
								<div class="formRight"><?php echo $row_leave['from_date']; ?></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>To</b></label>
								<div class="formRight"><?php echo $row_leave['to_date']; ?></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Days</b></label>
								<div class="formRight"><?php echo $row_leave['no_days']; ?></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Type of Leave</b></label>
								<div class="formRight"><?php echo $row_leave['type_leave']; ?></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Reason</b></label>
								<div class="formRight"><?php echo $row_leave['reason']; ?></div>
								<div class="clear"></div>
							</div>
							<input type = "hidden" name = "emp_id" value = "<?php echo $row_leave['emp_id']; ?>" />
							<input type = "hidden" name = "from_date" value = "<?php echo $row_leave['from_date']; ?>" />
							<input type = "hidden" name = "to_date" value = "<?php echo $row_leave['to_date']; ?>" />
							<div class="formSubmit"><input onclick="return confirm('Are you sure you want to approve this leave?');" type="submit" name = "approve" value="APPROVE" class="blueB" /><input onclick="return confirm('Are you sure you want to disapprove this leave?');" type="submit" name = "disapprove" value="DISAPPROVE" class="blueB" /></div>
							<div class="clear"></div>
					</fieldset> 
            </form>
		</div>
		<br>
    </div>
    
    <!-- Footer line -->
    <div id="footer">
    </div>

</div>

<div class="clear"></div>

</body>
</html>