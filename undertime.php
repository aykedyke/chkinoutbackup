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
	$add_dept_qry = mysql_query("INSERT INTO tbl_undertime (employee_id,company_id,hours,date) VALUES ('$employee_id','".$_SESSION['company']."','$hours','$date')");
	if($add_dept_qry){
		echo "<script>alert('Undertime Successfully Assigned!');</script>";
		echo "<script>location.href='index.php';</script>";
	}
}
?>


<?php include('header.php'); ?>

<body>
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Undertime</h5>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
    
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
                    <div class="title"><img src="images/icons/dark/list.png" alt="" class="titleIcon" /><h6>Assign Undertime</h6></div>
					<div class="formRow">
                        <label>Employee Name<span class="req">*</span></label>
                        <div class="formRight">
						 <select style = "width:200px" name="employee_id" id="employee_id">
						  <option value=""></option>
						  <?php
							$employee_qry = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '".$_SESSION['company']."' ORDER BY fullname ASC");
							while($row_employee = mysql_fetch_array($employee_qry)){
						  ?>
						  <option value="<?php echo $row_employee['employee_id']; ?>"><?php echo $row_employee['fullname']; ?></option>
						  <?php
						  }
						  ?>
						 </select> 
						</div>
						<div class="clear"></div>
                    </div>
					<div class="formRow">
                        <label>No. of Hours<span class="req">*</span></label>
                        <div class="formRight"><input style = "width:30px" type="text" class="validate[required]" name="hours" id="hours"/>
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