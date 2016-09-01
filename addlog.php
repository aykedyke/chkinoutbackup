<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}

if(isset($_POST['submit'])){
	$checkbox = $_POST['employee_check_id'];
    $countCheck = count($_POST['employee_check_id']);
	
	$status = $_POST['status'];
	$timein = $_POST['time_in'];
	$timeout = $_POST['time_out'];
	$date = $_POST['date'];
	$date = strtotime($date);
	$date = date('Y-m-d', $date);
	
	for($i=0;$i<$countCheck;$i++){
		$e_id  = $checkbox[$i];
		
		
		//mysql_query("DELETE FROM tbl_logs WHERE date = '$date' AND emp_id = '$emp_id'");
		$add_dept_qry = mysql_query("INSERT INTO tbl_logs (emp_id,status,action,time,date,company_id,start_time,end_time) VALUES 
									('$e_id','MANUAL','$status','$timein','$date','".$_SESSION['company']."','$timein','$timeout')");
		
	}
		echo "<script>alert('Logs Successfully Added!');</script>";
		echo "<script>document.location.href=addlog.php;</script>";
}
?>


<?php include('header.php'); ?>

<body>
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Add Manual Log</h5>
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
		 <form name = "myform"  enctype="multipart/form-data" id = "validate" action="" class="form" method = "post">
			<fieldset>
                <div class="widget">
                    <div class="title"><img src="images/icons/dark/list.png" alt="" class="titleIcon" /><h6>Add Logs</h6></div>
						<!--<input style = "width:200px" type="text" class="validate[required]" name="department_name" id="department_name"/>-->
						<div class="formRow" style = "height:250px;overflow-y:auto;">
							<!--<label for="selectall" id="selectControl">Select All</label>
							<input type="checkbox" id="selectall" />-->
							<label>Employee Name<span class="req">*</span></label>
						 <?php
							$empid_qry = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '".$_SESSION['company']."' AND inactive = '0' ORDER by fullname ASC");
							while($row_empid = mysql_fetch_array($empid_qry)){
						 ?>
							<div style = "margin-right: -1px;" class="formRight">
							  <input type = "checkbox" class="emps" name="employee_check_id[]" value = "<?php echo $row_empid['employee_id'] ?>" /><font style = "color:black;"> <?php echo $row_empid['fullname'] ?></font>
							 </div>
							<div class="clear"></div>
						
						  <?php 
						  }
						  ?>
						</div> 
					<div class="formRow">
							<label>Status<span class="req">*</span></label>
							<div class="formRight">
							<!--<input style = "width:200px" type="text" class="validate[required]" name="department_name" id="department_name"/>-->
							 <select style = "width:200px" name="status">
							  <option value="In">Time In</option>
							  <option value="Out">Time Out</option>
							</select> 
							</div>
							<div class="clear"></div>
					</div>
					<div class="formRow">
                        <label><b>TIME</b> HH:MM <font style = "font-size:10px;">(24hrs format)</font><span class="req">*</span></label>
                        <div class="formRight">
						<input style = "width:200px" type="text" class="" name="time_in" id="time_in"/>
						</div>
						<div class="clear"></div>
                    </div>
					<!--<div class="formRow">
                        <label><b>TIME OUT</b> HH:MM am/pm<span class="req">*</span></label>
                        <div class="formRight">
						<input style = "width:200px" type="text" class="" name="time_out" id="time_out"/>
						</div>
						<div class="clear"></div>
                    </div>-->
					<div class="formRow">
								<label><b>Date:</b></label>
								<div class="formRight"><input class="datepicker" style = "width:200px;" type = "text" name = "date" /></div>
								<div class="clear"></div>
					</div>
					<div class="formSubmit"><input type="submit" name = "submit" value="submit" class="blueB" /></div>
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
	function checkAll(bx) {
  var cbs = document.getElementsByTagName('input');
  for(var i=0; i < cbs.length; i++) {
    if(cbs[i].type == 'checkbox') {
      cbs[i].checked = bx.checked;
    }
  }
}
</script>
</body>
</html>