<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}

if(isset($_POST['submit'])){
	$employee_id = $_POST['employee_id'];
	$hours = $_POST['hours'];
	$date = $_POST['date'];
	$date = strtotime($date);
	$date = date('Y-m-d',$date);
	$emp_query = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '".$_SESSION['company']."'");
	while($row_emp_qry = mysql_fetch_array($emp_query)){
		mysql_query("INSERT INTO tbl_logs (emp_id,status,action,time,date,company_id,start_time) VALUES ('".$row_emp_qry['employee_id']."','Attendance','In','07:00:00','$date','".$_SESSION['company']."','07:00:00')");
	}
	echo "<script>alert('Overtime Successfully Added!');</script>";
	echo "<script>location.href='overtime.php';</script>";
}
?>


<?php include('header.php'); ?>

<body>
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Assign Holiday</h5>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
    <!-- Main content wrapper -->
    <div class="wrapper">
       <br>
		<?php
			$main_date = $_POST['date'];
	   ?>
	   <div id = "add_department">
		 <form enctype="multipart/form-data" id = "validate" action="" class="form" method = "post">
			<fieldset>
                <div class="widget">
                    <div class="title"><img src="images/icons/dark/list.png" alt="" class="titleIcon" /><h6>Add Holiday Work</h6></div>
					<div class="formRow">
                        <label>Name of Holiday<span class="req">*</span></label>
                        <div class="formRight"><input style = "width:150px" type="text" class="validate[required]" name="name_holiday" id="name_holiday"/>
						</div>
						<div class="clear"></div>
                    </div>
					<div class="formRow">
						<label><b>Date</b></label>
						<div class="formRight"><input class="datepicker" style = "width:200px;" type = "text" name = "date" /></div>
						<div class="clear"></div>
					</div>
					<div class="formSubmit"><input type="submit" name = "submit" value="submit" class="blueB" /><input onclick="cancel_add()" type="button" value="Cancel" class="blueB" /></div>
                    <div class="clear"></div>
                </div>
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
<script>
	function add_department(){
		$('#add_department').fadeIn();
	}
	function cancel_add(){
		$('#add_department').fadeOut();
	}
</script>
</body>
</html>