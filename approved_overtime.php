<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}
	$x = 1;
	
	$s_date = $_GET['s_date'];
	$e_date = $_GET['e_date'];
	
	 $s_date = strtotime($s_date);
	 $e_date = strtotime($e_date);
	
?>


<?php include('header.php'); ?>
<body>
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Overtime Forms</h5>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
	<div class="statsRow">
        <div class="wrapper">
        	<div class="controlB">
            	<ul>
							<?php
								$pending_leave_qry = mysql_query("SELECT * FROM tbl_overtime WHERE company_id = '".$_SESSION['company']."' AND approved = '0'");
								$count_pending = mysql_num_rows($pending_leave_qry);
								if($count_pending >= 1){
							?>
									<li onclick = "document.location.href='overtime_form.php'"><a href="javascript:void" title=""><img src="images/icons/control/32/order-149.png" alt="" /><span><font style = "color:red;">NEW</font> Pending Overtime Forms</span></a></li>
							<?php
									}else{
							?>
									<li onclick = "document.location.href='overtime_form.php'"><a href="javascript:void" title=""><img src="images/icons/control/32/order-149.png" alt="" /><span>Pending Overtime Forms</span></a></li>
							<?php
									}
							?>
				</ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
	 <div class="line"></div>
    <!-- Main content wrapper -->
    <div class="wrapper">
		<form enctype="multipart/form-data" id = "validate" class="form">
			<fieldset>
                <div class="widget">
                    <div class="title"><img src="images/icons/dark/list.png" alt="" class="titleIcon" /><h6>Search Filter</h6></div>
					<div class="formRow">
								<label><b> From Date:</b></label>
								<div class="formRight"><input class="datepicker" style = "width:200px;" value = "" type = "text" name = "s_date" /></div>
								<div class="clear"></div>
					</div>
					<div class="formRow">
								<label><b> To Date:</b></label>
								<div class="formRight"><input class="datepicker" style = "width:200px;" value = "" type = "text" name = "e_date" /></div>
								<div class="clear"></div>
					</div>
					<div class="formRow">
                        <label>Employee Name<span class="req">*</span></label>
                        <div class="formRight">
						 <select style = "padding:10px;width:200px" name="employee_id" id="employee_id">
						  <option value=""></option>
						  <?php
							$employee_qry = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '".$_SESSION['company']."' AND inactive = '0' ORDER BY fullname ASC");
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
					<div class="formSubmit"><input type="submit" name = "search" value="submit" class="blueB" /></div>
                    <div class="clear"></div>
                </div>
            </fieldset>
		</form>
       <br>
		<?php
			if($x == 1){
			$main_date = $_POST['date'];
	   ?>
	   <div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Approved Overtime Forms</h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
            <tr>
				<th style = "background:#4c4c4c">Employee ID</th>
				<th style = "background:#4c4c4c">Fullname</th>
				<th style = "background:#4c4c4c">Date</th>
				<th style = "background:#4c4c4c">No. of hours OT</th>
            </tr>
            </thead>
            <tbody>
			<?php
				if(($_GET['employee_id'] != "") && ($_GET['s_date'] == "")){
					$emp_qry = mysql_query("SELECT * FROM tbl_overtime WHERE employee_id = '".$_GET['employee_id']."' AND company_id = '".$_SESSION['company']."' AND approved = '1'");
				while($row_emp = mysql_fetch_array($emp_qry)){
				$emp_id = $row_emp['employee_id'];
				$qry_emp = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$emp_id'");
				$row_emp2 = mysql_fetch_array($qry_emp);
				$sum_date = strtotime($row_emp['date']); 
				$sum_date = date("Y",$sum_date);
				$year_now = date("Y");
				if($sum_date == $year_now){
				?>
					<tr>
						<td><center><?php echo $emp_id; ?></center> </td>
						<td><center><?php echo $row_emp2['fullname']; ?></center> </td>
						<td><center><?php echo $row_emp['date']; ?></center> </td>
						<td><center><?php echo $row_emp['hours']; ?></center> </td>
				</tr>
				<?php
				}else{
				}
			?>
			<?php
				}
				}else{
					if($_GET['employee_id'] != ""){
						$emp_qry = mysql_query("SELECT * FROM tbl_overtime WHERE employee_id = '".$_GET['employee_id']."' AND company_id = '".$_SESSION['company']."' AND approved = '1'");
					}else{
						$emp_qry = mysql_query("SELECT * FROM tbl_overtime WHERE company_id = '".$_SESSION['company']."' AND approved = '1'");
					}
					while($row_emp = mysql_fetch_array($emp_qry)){
					$emp_id = $row_emp['employee_id'];
					$qry_emp = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$emp_id'");
					$row_emp2 = mysql_fetch_array($qry_emp);
					$sum_date = strtotime($row_emp['date']); 
					if(($sum_date >= $s_date) && ($sum_date <= $e_date)){
				?>
					<tr>
							<td><center><?php echo $emp_id; ?></center> </td>
							<td><center><?php echo $row_emp2['fullname']; ?></center> </td>
							<td><center><?php echo $row_emp['date']; ?></center> </td>
							<td><center><?php echo $row_emp['hours']; ?></center> </td>
					</tr>
				<?php
					}else{
						
					}
					}
				}
			}
			?>
            </tbody>
            </table>
        </div>
		<br>
    <br>
    </div>
    
    <!-- Footer line -->
    <div id="footer">
    </div>

</div>

<div class="clear"></div>

</body>
</html>