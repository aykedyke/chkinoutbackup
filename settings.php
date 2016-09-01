<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}
if(isset($_POST['update'])){
	$c_pass = $_POST['current_pass'];
	$n_pass = $_POST['new_pass'];
	$r_pass = $_POST['re_pass'];
	
	$check_pass = mysql_query("SELECT * FROM tbl_admin WHERE password = '$c_pass'");
	$count_pass = mysql_num_rows($check_pass);
	
	if($count_pass > 0){
		if($n_pass == $r_pass){
			$r_pass = md5($r_pass);
			mysql_query("UPDATE tbl_admin SET password = '$r_pass' WHERE admin_id = '".$_SESSION['id']."'");
			echo "<script>alert('Password updated!');</script>";
		}else{
			echo "<script>alert('Password didn't match!');</script>";
		}
	}else{
		echo "<script>alert('Current Password is incorrect!');</script>";
	}
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
			$leave_qry = mysql_query("SELECT * FROM tbl_leave WHERE leave_id = '".$_GET['id']."'");
			$row_leave = mysql_fetch_array($leave_qry);
			?>
			<form enctype="multipart/form-data" id="validate" name="frmAdd" method="post" action="" class = "form">
				    <fieldset>  
							<div class="formRow">
								<label><b>Current Password</b></label>
								<div class="formRight"><input type = "password" name = "current_pass" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>New Password</b></label>
								<div class="formRight"><input type = "password" name = "new_pass" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Repeat New Password</b></label>
								<div class="formRight"><input type = "password" name = "re_pass" /></div>
								<div class="clear"></div>
							</div>
							<div class="formSubmit"><input onclick="return confirm('Are you sure you want to update your password?');" type="submit" name = "update" value="Update" class="blueB" /></div>
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