<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}

if(isset($_POST['submit'])){
	$department_name = $_POST['department_name'];
	$add_dept_qry = mysql_query("INSERT INTO tbl_department (department_name,company_id) VALUES ('$department_name','".$_SESSION['company']."')");
	if($add_dept_qry){
		echo "<script>alert('Department Successfully Added!');</script>";
		echo "<script>location.href='department.php';</script>";
	}
}
?>


<?php include('header.php'); ?>

<body>
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Upload Log via XLS file</h5>
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
	   <div id = "add_department" style = "">
		 <form enctype="multipart/form-data" id = "validate" action="" class="form" method = "post">
			<fieldset>
                <div class="widget">
                    <div class="title"><img src="images/icons/dark/list.png" alt="" class="titleIcon" /><h6>Upload Logs</h6></div>
					<div class="formRow">
                        <label>XLS log from biometrics<span class="req">*</span></label>
                        <div class="formRight"><input style = "width:600px;color:black;" type="file" name="department_name" id="department_name"/>
						</div>
						<div class="clear"></div>
                    </div>
					<div class="formSubmit"><input type="submit" name = "submit" value="submit" class="blueB" /></div>
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