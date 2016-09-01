<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}
error_reporting(0);
$id = $_GET['id'];

$employee_query = mysql_query("SELECT * FROM tbl_employee WHERE id = '$id'");
$row_employee = mysql_fetch_array($employee_query);
$employee_id = $row_employee['employee_id'];
$employee_status = $row_employee['status'];
$employee_type = $row_employee['employee_type'];
$tin_number = $row_employee['tin_number'];
$sss_number = $row_employee['sss_number'];
$hdmf_number = $row_employee['hdmf_number'];
$salary_adjustment = $row_employee['salary_adjustment'];
$sick_leave = $row_employee['sick_leave'];
$vacation_leave = $row_employee['vacation_leave'];

$info_employee = mysql_query("SELECT * FROM tbl_employee_info WHERE employee_id = '$employee_id'");
$count_info = mysql_num_rows($info_employee);
$row_info = mysql_fetch_array($info_employee);

$manda_employee = mysql_query("SELECT * FROM tbl_deduction WHERE emp_id = '$id' AND deduction_name = 'SSS'");
$count_manda = mysql_num_rows($manda_employee);
$row_manda = mysql_fetch_array($manda_employee);

if($count_info == 0){
	$basic_salary = 0;
	$basic_tax = 0;
}else{
	$basic_salary = $row_info['basic_salary'];
	$basic_tax = $row_info['basic_tax'];
}

if(isset($_POST['update'])){
	$basic_pay = $_POST['basic_pay'];
	$start_date = $_POST['start_date'];
	$birth_date = $_POST['birth_date'];
	$emp_name = $_POST['emp_name'];
	$emp_position = $_POST['emp_position'];
	$dependents = $_POST['dependents'];
	$employee_status = $_POST['employee_status'];
	$employee_type = $_POST['employee_type'];
	$sss_number = $_POST['sss_number'];
	$tin_number = $_POST['tin_number'];
	$hdmf_number = $_POST['hdmf_number'];
	$philhealth_number = $_POST['philhealth_number'];
	$account_number = $_POST['account_number'];
	$department = $_POST['department'];
	$salary_adjustment = $_POST['salary_adjustment'];
	$sick_leave = $_POST['sick_leave'];
	$vacation_leave = $_POST['vacation_leave'];
	
	$contact_number = $_POST['contact_number'];
	$confirmed_date = $_POST['confirmed_date'];
	$email_add = $_POST['email_add'];
	$home_address = $_POST['home_address'];
	$emergency_contactperson = $_POST['emergency_contactperson'];
	$relationship = $_POST['relationship'];
	$emergency_contactnumber = $_POST['emergency_contactnumber'];
	$emergency_address = $_POST['emergency_address'];
	$nick_name = $_POST['nick_name'];
	
	$fromsss_loan = $_POST['fromsss_loan'];
	$tosss_loan = $_POST['tosss_loan'];
	$fromhdmf_loan = $_POST['fromhdmf_loan'];
	$tohdmf_loan = $_POST['tohdmf_loan'];
	$fromstaff_loan = $_POST['fromstaff_loan'];
	$tostaff_loan = $_POST['tostaff_loan'];
	$identity_no = $_POST['identity_no'];
	$identity_type = $_POST['identity_type'];
	
	$sss_total_loan = $_POST['sss_total_loan'];
	$hdmf_total_loan = $_POST['hdmf_total_loan'];
	$staff_total_loan = $_POST['staff_total_loan'];
	
	///computation for sss loan///
	  $str_fromsss_loan = strtotime($fromsss_loan);
	  $str_tosss_loan = strtotime($tosss_loan);
	  $sss_str_duration = round(($str_tosss_loan - $str_fromsss_loan) / 2628000); //number of months deduction
	  $sss_str_duration = $sss_str_duration * 2; //number of cutoffs deduction
	  $sss_loan = round(($sss_total_loan / $sss_str_duration), 2);
	/// end computation for sss loan///
	
	///computation for hdmf loan///
	  $str_fromhdmf_loan = strtotime($fromhdmf_loan);
	  $str_tohdmf_loan = strtotime($tohdmf_loan);
	  $hdmf_str_duration = round(($str_tohdmf_loan - $str_fromhdmf_loan) / 2628000); //number of months deduction
	  $hdmf_str_duration = $hdmf_str_duration * 2; //number of cutoffs deduction
	  $hdmf_loan = round(($hdmf_total_loan / $hdmf_str_duration), 2);
	///end computation for hdmf loan///
	
	///computation for salary loan///
	  $str_fromstaff_loan = strtotime($fromstaff_loan);
	  $str_tostaff_loan = strtotime($tostaff_loan);
	  $staff_str_duration = round(($str_tostaff_loan - $str_fromstaff_loan) / 2628000); //number of months deduction
	  $staff_str_duration = $staff_str_duration * 2; //number of cutoffs deduction
	  $staff_loan = round(($staff_total_loan / $staff_str_duration), 2);
	///end computation for salary loan///
	
	
	//SSS COMPUTATION//
	if($basic_pay >= 15750){
		$sss = 581;
	}else if($basic_pay >= 15250 && $basic_pay <= 15749){
		$sss = 563;
	}else if($basic_pay >= 14750 && $basic_pay <= 15249){
		$sss = 545;
	}else if($basic_pay >= 14250 && $basic_pay <= 14749){
		$sss = 527;
	}else if($basic_pay >= 13750 && $basic_pay <= 14249){
		$sss = 508;
	}else if($basic_pay >= 13250 && $basic_pay <= 13749){
		$sss = 490;
	}else{
		$sss = 472;
	}
	
	//PHILHEALTH COMPUTATION//
	if($basic_pay >= 35000){
		$philhealth = 438;
	}else if($basic_pay >= 34000 && $basic_pay <= 34999){
		$philhealth = 425;
	}else if($basic_pay >= 33000 && $basic_pay <= 33999){
		$philhealth = 412;
	}else if($basic_pay >= 32000 && $basic_pay <= 32999){
		$philhealth = 400;
	}else if($basic_pay >= 31000 && $basic_pay <= 31999){
		$philhealth = 387;
	}else if($basic_pay >= 30000 && $basic_pay <= 30999){
		$philhealth = 375;
	}else if($basic_pay >= 29000 && $basic_pay <= 29999){
		$philhealth = 362;
	}else if($basic_pay >= 28000 && $basic_pay <= 28999){
		$philhealth = 350;
	}else if($basic_pay >= 27000 && $basic_pay <= 27999){
		$philhealth = 337;
	}else if($basic_pay >= 26000 && $basic_pay <= 26999){
		$philhealth = 325;
	}else if($basic_pay >= 25000 && $basic_pay <= 25999){
		$philhealth = 312;
	}else if($basic_pay >= 24000 && $basic_pay <= 24999){
		$philhealth = 300;
	}else if($basic_pay >= 23000 && $basic_pay <= 23999){
		$philhealth = 288;
	}else if($basic_pay >= 22000 && $basic_pay <= 22999){
		$philhealth = 275;
	}else if($basic_pay >= 21000 && $basic_pay <= 21999){
		$philhealth = 262;
	}else if($basic_pay >= 20000 && $basic_pay <= 20999){
		$philhealth = 250;
	}else if($basic_pay >= 19000 && $basic_pay <= 19999){
		$philhealth = 237;
	}else if($basic_pay >= 18000 && $basic_pay <= 18999){
		$philhealth = 225;
	}else if($basic_pay >= 17000 && $basic_pay <= 17999){
		$philhealth = 212;
	}else if($basic_pay >= 16000 && $basic_pay <= 16999){
		$philhealth = 200;
	}else if($basic_pay >= 15000 && $basic_pay <= 15999){
		$philhealth = 188;
	}else if($basic_pay >= 14000 && $basic_pay <= 14999){
		$philhealth = 175;
	}else if($basic_pay >= 13000 && $basic_pay <= 13999){
		$philhealth = 163;
	}else if($basic_pay >= 12000 && $basic_pay <= 12999){
		$philhealth = 150;
	}else if($basic_pay >= 11000 && $basic_pay <= 11999){
		$philhealth = 138;
	}else if($basic_pay >= 10000 && $basic_pay <= 10999){
		$philhealth = 125;
	}else if($basic_pay >= 9000 && $basic_pay <= 9999){
		$philhealth = 113;
	}else{
		$philhealth = 100;
	}
	
	
	// END SSS COMPUTATION//
	//581 = SSS
	//100 = PagIbig
	//438 =  Phil Health
	
	$final_basic_pay = $basic_pay - $sss - 100 - $philhealth;
	
	$bracket1 = 4167;
	$bracket2 = 5000;
	$bracket3 = 6667;
	$bracket4 = 10000;
	$bracket5 = 15833;
	$bracket6 = 25000;
	$bracket7 = 45833;
	
	//echo $sss;
	//echo "<br>";
	//echo $philhealth;
	
	if($final_basic_pay > $bracket7){
		//$diffe = $tax_pay - $bracket7;
		$diffe = (($final_basic_pay - $bracket7) * .32) + 10416.67;
		$diffe = round($diffe);
	}else if(($final_basic_pay > $bracket6) && ($final_basic_pay < $bracket7)){
		$diffe = (($final_basic_pay - $bracket6) * .30) + 4166.67;
		$diffe = round($diffe);
	}else if(($final_basic_pay > $bracket5) && ($final_basic_pay < $bracket6)){
		$diffe = (($final_basic_pay - $bracket5) * .25) + 1875;
		$diffe = round($diffe);
	}else if(($final_basic_pay > $bracket4) && ($final_basic_pay < $bracket5)){
		$diffe = (($final_basic_pay - $bracket4) * .20) + 708.33;
		$diffe = round($diffe);
	}else if(($final_basic_pay > $bracket3) && ($final_basic_pay < $bracket4)){
		$diffe = (($final_basic_pay - $bracket3) * .15) + 208.33;
		$diffe = round($diffe);
	}else if(($final_basic_pay > $bracket2) && ($final_basic_pay < $bracket3)){
		$diffe = (($final_basic_pay - $bracket2) * .10) + 41.67;
		$diffe = round($diffe);
	}else if(($final_basic_pay > $bracket1) && ($final_basic_pay < $bracket2)){
		$diffe = (($final_basic_pay - $bracket1) * .5) + 0;
		$diffe = round($diffe);
	}else if($final_basic_pay < $bracket1){
		$diffe = $final_basic_pay;
	}
	
	if($_SESSION['company'] != 3){
	$tax_pay = $diffe;
	}else{
	$tax_pay = $_POST['tax_pay'];
	}
	
	mysql_query("UPDATE tbl_employee SET 
					start_date = '$start_date', 
					fullname = '$emp_name', 
					position = '$emp_position',
					birthday = '$birth_date', 
					dependents = '$dependents', 
					hdmf_number = '$hdmf_number', 
					tin_number = '$tin_number', 
					sss_number = '$sss_number', 
					philhealth_number = '$philhealth_number', 
					employee_type = '$employee_type' , 
					account_number = '$account_number', 
					sss_loan = '$sss_loan', 
					hdmf_loan = '$hdmf_loan', 
					staff_loan = '$staff_loan', 
					department_id = '$department', 
					salary_adjustment = '$salary_adjustment', 
					status = '$employee_status', 
					sick_leave = '$sick_leave', 
					vacation_leave = '$vacation_leave', 
					contact_number = '$contact_number',  
					email_add = '$email_add',  
					home_address = '$home_address',  
					emergency_contactperson = '$emergency_contactperson',  
					relationship = '$relationship',  
					emergency_contactnumber = '$emergency_contactnumber',  
					emergency_address = '$emergency_address',  
					confirmed_date = '$confirmed_date', 
					fromsss_loan = '$fromsss_loan',  
					tosss_loan = '$tosss_loan',  
					fromhdmf_loan = '$fromhdmf_loan',  
					tohdmf_loan = '$tohdmf_loan',  
					fromstaff_loan = '$fromstaff_loan', 
					tostaff_loan = '$tostaff_loan',  
					identity_type = '$identity_type',  
					identity_no = '$identity_no',  
					sss_total_loan = '$sss_total_loan',  
					hdmf_total_loan = '$hdmf_total_loan',  
					staff_total_loan = '$staff_total_loan',  
					nick_name = '$nick_name' 
					WHERE id = '$id'");
	
	
	
 	if($count_info == 0){
		mysql_query("INSERT INTO tbl_employee_info (employee_id,basic_salary,basic_tax) VALUES ('$employee_id','$basic_pay','$tax_pay')");
		echo "<script>document.location.href='view_employee.php'</script>";
        echo "<script>'Content-type: application/octet-stream'</script>"; 
	}else{
		mysql_query("UPDATE tbl_employee_info SET basic_salary = '$basic_pay', basic_tax = '$tax_pay' WHERE employee_id = '$employee_id'");
		echo "<script>document.location.href='view_employee.php'</script>";
        echo "<script>'Content-type: application/octet-stream'</script>";
	} 
}

if(isset($_POST['add_deduct'])){
	$deduction_name = $_POST['deduction_name'];
	$deduction_price = $_POST['deduction_price'];
	mysql_query("INSERT INTO tbl_deduction (deduction_name,deduction_price,emp_id) VALUES ('$deduction_name','$deduction_price','$id')");
}
if(isset($_POST['add_allow'])){
	$allowance_name = $_POST['allowance_name'];
	$allowance_price = $_POST['allowance_price'];
	mysql_query("INSERT INTO tbl_allowance (allowance_name,allowance_price,emp_id) VALUES ('$allowance_name','$allowance_price','$id')");
}
?>


<?php include('header.php'); ?>

<body>
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5><?php echo $row_employee['fullname']; ?></h5>
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
					<?php
						if($_SESSION['company'] == 3){
					?>
					<fieldset> 
							<div class="formRow">
								<label><b>Name:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "emp_name" value = "<?php echo $row_employee['fullname']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Alias:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "nick_name" value = "<?php echo $row_employee['nick_name']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Identity No:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "identity_no" value = "<?php echo $row_employee['identity_no']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Identity Type:</b></label>
								<div class="formRight">
										 <select style = "width:200px;" name = "identity_type">
										  <option value="<?php echo $row_employee['identity_type']; ?>"><?php echo $row_employee['identity_type']; ?></option>
										  <option value="Passport">Passport</option>
										  <option value="FIN">FIN</option>
										  <option value="FIN(ep)">FIN(ep)</option>
										  <option value="SNRIC(Pink)">SNRIC(Pink)</option>
										  <option value="SNRIC(Blue)">SNRIC(Blue)</option>
										</select> 
								</div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Gender:</b></label>
								<div class="formRight">
										 <select style = "width:200px;" name = "gender">
										  <option value=""></option>
										  <option value="Male">Male</option>
										  <option value="Female">Female</option>
										</select> 
								</div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Nationality:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "nationality" value = "<?php echo $row_employee['nationality']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Country of Birth:</b></label>
								<div class="formRight">
										 <select style = "width:200px;" name = "gender">
										  <option value=""></option>
										</select> 
								</div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Position:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "emp_position" value = "<?php echo $row_employee['position']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Birth Date:</b></label>
								<div class="formRight"><input class="datepicker" style = "width:200px;" type = "text" name = "birth_date" value = "<?php echo $row_employee['birthday']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Hired Date:</b></label>
								<div class="formRight"><input class="datepicker" style = "width:200px;" type = "text" name = "start_date" value = "<?php echo $row_employee['start_date']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow" style = "display:none;">
								<label><b>Basic Pay</b></label>
								<div class="formRight">P  <input style = "width:200px;" type = "text" name = "basic_pay" value = "<?php echo $basic_salary; ?>" /> .00</div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Marital Status</b></label>
								<div class="formRight">
										 <select style = "width:200px;" name = "employee_type">
										  <option value="<?php echo $employee_type; ?>"><?php echo $employee_type; ?></option>
										  <option value="Single">Single</option>
										  <option value="Married">Married</option>
										</select> 
								</div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Dependents</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "dependents" value = "<?php echo $row_employee['dependents']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>SSS Number:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "sss_number" value = "<?php echo $row_employee['sss_number']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>TIN Number:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "tin_number" value = "<?php echo $row_employee['tin_number']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>HDMF Number:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "hdmf_number" value = "<?php echo $row_employee['hdmf_number']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Phil Health Number:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "philhealth_number" value = "<?php echo $row_employee['philhealth_number']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<?php if(($_SESSION['company'] == 1) || ($_SESSION['company'] == 2)){ ?>
							<div style = "display:none;">
							<div class="formRow">
								<label><b>Tax</b></label>
								<div class="formRight">P  <input readonly style = "width:200px;" type = "text" name = "tax_pay" value = "<?php echo $basic_tax; ?>" /> .00</div>
								<div class="clear"></div>
							</div>
							<?php }else{ ?>
							<div class="formRow">
								<label><b>Tax</b></label>
								<div class="formRight">P  <input style = "width:200px;" type = "text" name = "tax_pay" value = "<?php echo $basic_tax; ?>" /> .00</div>
								<div class="clear"></div>
							</div>
							<?php } ?>
							</div>
							<div class="formRow">
								<label><b>Deductions</b></label>
								<div class="formRight"></div>
								<div class="clear"></div>
							</div>
							<?php
								$other_deduct_qry = mysql_query("SELECT * FROM tbl_deduction WHERE emp_id = '$id' ORDER BY deduction_id");
								while($row_other_deduct = mysql_fetch_array($other_deduct_qry)){
							?>
							<div class="formRow">
								<label><b><?php echo $row_other_deduct['deduction_name']; ?></b></label>
								<div class="formRight">P  <?php echo $row_other_deduct['deduction_price']; ?> .00</div>
								<div class="clear"></div>
							</div>	
							<?php
								}
							?>
							<div class="formRow">
								<label><b>Allowance</b></label>
								<div class="formRight"></div>
								<div class="clear"></div>
							</div>
							<?php
								$other_deduct_qry = mysql_query("SELECT * FROM tbl_allowance WHERE emp_id = '$id' ORDER BY allowance_id");
								while($row_other_deduct = mysql_fetch_array($other_deduct_qry)){
							?>
								<div class="formRow">
									<label><b><?php echo $row_other_deduct['allowance_name']; ?></b></label>
									<div class="formRight">P  <?php echo $row_other_deduct['allowance_price']; ?> .00</div>
									<div class="clear"></div>
								</div>	
							<?php
								}
							?>
							<div id = "add_deduct" style = "display:none;" class="formRow">
								<form enctype="multipart/form-data" id="validate" name="frmAdd" method="post" action="" class = "form">
									<fieldset>  
										<div class="formRow">
											<label><b>Name</b></label>
											<div class="formRight"><input style = "width:200px;" type = "text" name = "deduction_name" /></div>
											<div class="clear"></div>
										</div>
										<div class="formRow">
											<label><b>Deduction Price</b></label>
											<div class="formRight"><input style = "width:200px;" type = "text" name = "deduction_price" /></div>
											<div class="clear"></div>
										</div>
										<div class="formSubmit"><input onclick="return confirm('Are you sure you want to add this deduction?');" type="submit" name = "add_deduct" value="Add Deduction" class="blueB" /><input onclick = "cancel_deduct()" class="blueB" type = "button" value = "Cancel" /></div>
										<div class="clear"></div>
									</fieldset>
								</form>
							</div>
							<div id = "add_allow" style = "display:none;" class="formRow">
								<form enctype="multipart/form-data" id="validate" name="frmAdd" method="post" action="" class = "form">
									<fieldset>  
										<div class="formRow">
											<label><b>Allowance Name</b></label>
											<div class="formRight"><input style = "width:200px;" type = "text" name = "allowance_name" /></div>
											<div class="clear"></div>
										</div>
										<div class="formRow">
											<label><b>Allowance Price</b></label>
											<div class="formRight"><input style = "width:200px;" type = "text" name = "allowance_price" /></div>
											<div class="clear"></div>
										</div>
										<div class="formSubmit"><input onclick="return confirm('Are you sure you want to add this allowance?');" type="submit" name = "add_allow" value="Add Allowance" class="blueB" /><input onclick = "cancel_allow()" class="blueB" type = "button" value = "Cancel" /></div>
										<div class="clear"></div>
									</fieldset>
								</form>
							</div>
							<div id = "gray_button" class="formRow">
								<label>
									<input onclick = "add_other()" type = "button" name = "add_deduction_benefit" value = "Add Deduction" />
								</label>
								<div class="formRight"></div>
								<div class="clear"></div>
							</div>
							<div id = "gray_button_allow" class="formRow">
								<label>
									<input onclick = "add_otherallow()" type = "button" name = "add_allowance" value = "Add Allowance" />
								</label>
								<div class="formRight"></div>
								<div class="clear"></div>
							</div>
					<?php	
						}else{
					?>
				    <fieldset> 
							<div class="formRow">
								<label><b>Fullname:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "emp_name" value = "<?php echo $row_employee['fullname']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Nickname:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "nick_name" value = "<?php echo $row_employee['nick_name']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Position:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "emp_position" value = "<?php echo $row_employee['position']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Department</b></label>
									<div class="formRight">
										<select style = "width:200px;" name = "department">
										  <option value="<?php echo $row_employee['department_id']; ?>">
											<?php 
												$dept_qry_1st = mysql_query("SELECT * FROM tbl_sub_department WHERE sub_department_id = '".$row_employee['department_id']."'");
												$row_dept_1st = mysql_fetch_array($dept_qry_1st);
												
												echo $row_dept_1st['department_name'];
											?>
										  </option>
										 <?php
											$dept_qry = mysql_query("SELECT * FROM tbl_sub_department WHERE company_id = '".$_SESSION['company']."'");
											while($row_dept = mysql_fetch_array($dept_qry)){
										 ?>
										  <option value="<?php echo $row_dept['sub_department_id']; ?>"><?php echo $row_dept['department_name']; ?></option>
										  <?php
											}
										  ?>
										</select> 
									</div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Birth Date:</b></label>
								<div class="formRight"><input class="datepicker" style = "width:200px;" type = "text" name = "birth_date" value = "<?php echo $row_employee['birthday']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Start Date:</b></label>
								<div class="formRight"><input class="datepicker" style = "width:200px;" type = "text" name = "start_date" value = "<?php echo $row_employee['start_date']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Confirmed Date:</b></label>
								<div class="formRight"><input class="datepicker" style = "width:200px;" type = "text" name = "confirmed_date" value = "<?php echo $row_employee['confirmed_date']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Employee Contact number</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "contact_number" value = "<?php echo $row_employee['contact_number']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Email Address</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "email_add" value = "<?php echo $row_employee['email_add']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Home Address</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "home_address" value = "<?php echo $row_employee['home_address']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div style = "padding:30px;">
							<b>INCASE OF EMERGENCY:</b>
								<div class="formRow">
									<label><b>Person to Contact</b></label>
									<div class="formRight"><input style = "width:200px;" type = "text" name = "emergency_contactperson" value = "<?php echo $row_employee['emergency_contactperson']; ?>" /></div>
									<div class="clear"></div>
								</div>
								<div class="formRow">
									<label><b>Relationship</b></label>
									<div class="formRight"><input style = "width:200px;" type = "text" name = "relationship" value = "<?php echo $row_employee['relationship']; ?>" /></div>
									<div class="clear"></div>
								</div>
								<div class="formRow">
									<label><b>Contact Number</b></label>
									<div class="formRight"><input style = "width:200px;" type = "text" name = "emergency_contactnumber" value = "<?php echo $row_employee['emergency_contactnumber']; ?>" /></div>
									<div class="clear"></div>
								</div>
								<div class="formRow">
									<label><b>Address</b></label>
									<div class="formRight"><input style = "width:200px;" type = "text" name = "emergency_address" value = "<?php echo $row_employee['emergency_address']; ?>" /></div>
									<div class="clear"></div>
								</div>
							</div>
							<?php
							 	if($_SESSION['company'] == 2 && $_SESSION['admin'] == "admin"){
							?>
										<div class="formRow" style = "">
											<label><b>Basic Pay</b></label>
											<div class="formRight">P  <input style = "width:200px;" type = "text" name = "basic_pay" value = "<?php echo $basic_salary; ?>" /> .00</div>
											<div class="clear"></div>
										</div>
										<div class="formRow" style = "display:none;">
											<label><b>Salary Adjustment</b></label>
											<div class="formRight">P  <input style = "width:200px;" type = "text" name = "salary_adjustment" value = "<?php echo $salary_adjustment; ?>" /> .00</div>
											<div class="clear"></div>
										</div>
										<?php
										}else{ 
										?>
										<div class="formRow">
											<label><b>Basic Pay</b></label>
											<div class="formRight">P  <input style = "width:200px;" type = "text" name = "basic_pay" value = "<?php echo $basic_salary; ?>" /> .00</div>
											<div class="clear"></div>
										</div>
										<div class="formRow">
											<label><b>Salary Adjustment</b></label>
											<div class="formRight">P  <input style = "width:200px;" type = "text" name = "salary_adjustment" value = "<?php echo $salary_adjustment; ?>" /> .00</div>
											<div class="clear"></div>
										</div>
							<?php
							 } 
							?>
							<div class="formRow">
								<label><b>Sick Leave</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "sick_leave" value = "<?php echo $sick_leave; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Vacation Leave</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "vacation_leave" value = "<?php echo $vacation_leave; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Employee Type</b></label>
								<div class="formRight">
										 <select style = "width:200px;" name = "employee_status">
										  <option value="<?php echo $employee_status; ?>"><?php echo $employee_status; ?></option>
										  <option value="Probationary">Probationary</option>
										  <option value="Regular">Regular</option>
										</select> 
								</div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Marital Status</b></label>
								<div class="formRight">
										 <select style = "width:200px;" name = "employee_type">
										  <option value="<?php echo $employee_type; ?>"><?php echo $employee_type; ?></option>
										  <option value="Single">Single</option>
										  <option value="Single With Dependent">Single With Dependent</option>
										  <option value="Married">Married</option>
										  <option value="Married With Dependent">Married With Dependent</option>
										</select> 
								</div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Dependents</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "dependents" value = "<?php echo $row_employee['dependents']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>SSS Number:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "sss_number" value = "<?php echo $row_employee['sss_number']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>TIN Number:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "tin_number" value = "<?php echo $row_employee['tin_number']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>HDMF Number:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "hdmf_number" value = "<?php echo $row_employee['hdmf_number']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Phil Health Number:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "philhealth_number" value = "<?php echo $row_employee['philhealth_number']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Account Number:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "account_number" value = "<?php echo $row_employee['account_number']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>SSS Total loan:</b></label><div class="formRight"><input style = "width:200px;" type = "text" name = "sss_total_loan" value = "<?php echo $row_employee['sss_total_loan']; ?>" /></div>
								<div class="clear"></div>
								<label><b>SSS loan deduction per cutoff :</b></label><div class="formRight"><input readonly style = "width:200px;" type = "text" name = "sss_loan" value = "<?php echo $row_employee['sss_loan']; ?>" /></div>
								<div class="clear"></div>
								<label><b>SSS loan dur. from:</b></label><div class="formRight"><input class = "datepicker" type = "text" name = "fromsss_loan" value = "<?php echo $row_employee['fromsss_loan']; ?>" /></div>
								<div class="clear"></div>
								<label><b>SSS loan dur. to:</b></label><div class="formRight"><input class = "datepicker" type = "text" name = "tosss_loan" value = "<?php echo $row_employee['tosss_loan']; ?>" /></div>
								
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>HDMF Total loan:</b></label><div class="formRight"><input style = "width:200px;" type = "text" name = "hdmf_total_loan" value = "<?php echo $row_employee['hdmf_total_loan']; ?>" /></div>
								<div class="clear"></div>
								<label><b>HDMF Loan deduction per cutoff ::</b></label><div class="formRight"><input readonly style = "width:200px;" type = "text" name = "hdmf_loan" value = "<?php echo $row_employee['hdmf_loan']; ?>" /></div>
								<div class="clear"></div>
								<label><b>HDMF loan dur. from:</b></label><div class="formRight"><input class = "datepicker" type = "text" name = "fromhdmf_loan" value = "<?php echo $row_employee['fromhdmf_loan']; ?>" /></div>
								<div class="clear"></div>
								<label><b>HDMF loan dur. to:</b></label><div class="formRight"><input class = "datepicker" type = "text" name = "tohdmf_loan" value = "<?php echo $row_employee['tohdmf_loan']; ?>" /></div>
								
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Salary Total loan:</b></label><div style = "margin-left:20px" class="formRight"><input style = "width:200px;" type = "text" name = "staff_total_loan" value = "<?php echo $row_employee['staff_total_loan']; ?>" /></div>
								<div class="clear"></div>
								<label><b>Salary Loan deduction per cutoff ::</b></label><div class="formRight"><input readonly style = "width:200px;" type = "text" name = "staff_loan" value = "<?php echo $row_employee['staff_loan']; ?>" /></div>
								<div class="clear"></div>
								<label><b>Salary loan dur. from:</b></label><div class="formRight"><input class = "datepicker" type = "text" name = "fromstaff_loan" value = "<?php echo $row_employee['fromstaff_loan']; ?>" /></div>
								<div class="clear"></div>
								<label><b>Salary loan dur. to:</b></label><div class="formRight"><input class = "datepicker" type = "text" name = "tostaff_loan" value = "<?php echo $row_employee['tostaff_loan']; ?>" /></div>
								
								<div class="clear"></div>
							</div>
							<?php if($_SESSION['company'] != 3){ ?>
							<div style = "display:none;">
							<div class="formRow">
								<label><b>Tax</b></label>
								<div class="formRight">P  <input readonly style = "width:200px;" type = "text" name = "tax_pay" value = "<?php echo $basic_tax; ?>" /> .00</div>
								<div class="clear"></div>
							</div>
							<?php }else{ ?>
							<div class="formRow">
								<label><b>Tax</b></label>
								<div class="formRight">P  <input style = "width:200px;" type = "text" name = "tax_pay" value = "<?php echo $basic_tax; ?>" /> .00</div>
								<div class="clear"></div>
							</div>
							<?php } ?>
							</div>
							<div class="formRow">
								<label><b>Deductions</b></label>
								<div class="formRight"></div>
								<div class="clear"></div>
							</div>
							<?php
								$other_deduct_qry = mysql_query("SELECT * FROM tbl_deduction WHERE emp_id = '$id' ORDER BY deduction_id");
								while($row_other_deduct = mysql_fetch_array($other_deduct_qry)){
							?>
							<div class="formRow">
								<label><b><?php echo $row_other_deduct['deduction_name']; ?></b></label>
								<div class="formRight">P  <?php echo $row_other_deduct['deduction_price']; ?> .00</div>
								<div class="clear"></div>
							</div>	
							<?php
								}
							?>
							<div class="formRow">
								<label><b>Allowance</b></label>
								<div class="formRight"></div>
								<div class="clear"></div>
							</div>
							<?php
								$other_deduct_qry = mysql_query("SELECT * FROM tbl_allowance WHERE emp_id = '$id' ORDER BY allowance_id");
								while($row_other_deduct = mysql_fetch_array($other_deduct_qry)){
							?>
								<div class="formRow">
									<label><b><?php echo $row_other_deduct['allowance_name']; ?></b></label>
									<div class="formRight">P  <?php echo $row_other_deduct['allowance_price']; ?> .00</div>
									<div class="clear"></div>
									<font style = "color:red;cursor:pointer;"><a onclick="return confirm('Are you sure you want to remove?');" href = "delete_allowance.php?id=<?php echo $row_other_deduct['allowance_id']; ?>">Remove</a></font>
								</div>	
							<?php
								}
							?>
							<div id = "add_deduct" style = "display:none;" class="formRow">
								<form enctype="multipart/form-data" id="validate" name="frmAdd" method="post" action="" class = "form">
									<fieldset>  
										<div class="formRow">
											<label><b>Name</b></label>
											<div class="formRight"><input style = "width:200px;" type = "text" name = "deduction_name" /></div>
											<div class="clear"></div>
										</div>
										<div class="formRow">
											<label><b>Deduction Price</b></label>
											<div class="formRight"><input style = "width:200px;" type = "text" name = "deduction_price" /></div>
											<div class="clear"></div>
										</div>
										<div class="formRow">
											<label><b></b></label>
											<div class="formRight"><input type="checkbox" name="vehicle" value=""/>Only for this Cutoff</div>
											<div class="clear"></div>
										</div>
										<div class="formSubmit"><input onclick="return confirm('Are you sure you want to add this deduction?');" type="submit" name = "add_deduct" value="Add Deduction" class="blueB" /><input onclick = "cancel_deduct()" class="blueB" type = "button" value = "Cancel" /></div>
										<div class="clear"></div>
									</fieldset>
								</form>
							</div>
							<div id = "add_allow" style = "display:none;" class="formRow">
								<form enctype="multipart/form-data" id="validate" name="frmAdd" method="post" action="" class = "form">
									<fieldset>  
										<div class="formRow">
											<label><b>Allowance Name</b></label>
											<div class="formRight"><input style = "width:200px;" type = "text" name = "allowance_name" /></div>
											<div class="clear"></div>
										</div>
										<div class="formRow">
											<label><b>Allowance Ammount</b></label>
											<div class="formRight"><input style = "width:200px;" type = "text" name = "allowance_price" /></div>
											<div class="clear"></div>
										</div>
										<div class="formSubmit"><input onclick="return confirm('Are you sure you want to add this allowance?');" type="submit" name = "add_allow" value="Add Allowance" class="blueB" /><input onclick = "cancel_allow()" class="blueB" type = "button" value = "Cancel" /></div>
										<div class="clear"></div>
									</fieldset>
								</form>
							</div>
							<div id = "gray_button" class="formRow">
								<label>
									<input onclick = "add_other()" type = "button" name = "add_deduction_benefit" value = "Add Deduction" />
								</label>
								<div class="formRight"></div>
								<div class="clear"></div>
							</div>
							<div id = "gray_button_allow" class="formRow">
								<label>
									<input onclick = "add_otherallow()" type = "button" name = "add_allowance" value = "Add Allowance" />
								</label>
								<div class="formRight"></div>
								<div class="clear"></div>
							</div>
							<?php
							}
							?>
							<div class="formSubmit" id = "update_id"><input onclick="return confirm('Are you sure you want to update this employee?');" type="submit" name = "update" value="UPDATE" class="blueB" /></div>
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
<script>
	function add_other(){
		$('#add_deduct').fadeIn();
		$('#gray_button').hide();
		$('#update_id').hide();
	}
	function add_otherallow(){
		$('#add_allow').fadeIn();
		$('#gray_button_allow').hide();
	}
	function cancel_deduct(){
		$('#add_deduct').hide();
		$('#gray_button').fadeIn();
		$('#update_id').fadeIn();
	}
	function cancel_allow(){
		$('#add_allow').hide();
		$('#gray_button_allow').fadeIn();
	}
</script>
</body>
</html>