<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}

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
	$sss_loan = $_POST['sss_loan'];
	$hdmf_loan = $_POST['hdmf_loan'];
	$staff_loan = $_POST['staff_loan'];
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
	$nationality = $_POST['nationality'];
	
	$fromsss_loan = $_POST['fromsss_loan'];
	$tosss_loan = $_POST['tosss_loan'];
	$fromhdmf_loan = $_POST['fromhdmf_loan'];
	$tohdmf_loan = $_POST['tohdmf_loan'];
	$fromstaff_loan = $_POST['fromstaff_loan'];
	$tostaff_loan = $_POST['tostaff_loan'];
	$identity_no = $_POST['identity_no'];
	$pass_expiry = $_POST['pass_expiry'];
	$identity_type = $_POST['identity_type'];
	$countrybirth = $_POST['countrybirth'];
	$gender = $_POST['gender'];
	
	$travdoctype = $_POST['travdoctype'];
	$travdocno = $_POST['travdocno'];
	
	$educbg = $_POST['educbg'];
	$nameschool = $_POST['nameschool'];
	$fromschool = $_POST['fromschool'];
	$toschool = $_POST['toschool'];
	$employername = $_POST['employername'];
	$posoccu = $_POST['posoccu'];
	$naturedut = $_POST['naturedut'];
	$fromemployment = $_POST['fromemployment'];
	$toemployment = $_POST['toemployment'];
	
	
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
					nationality = '$nationality',  
					countrybirth = '$countrybirth',  
					gender = '$gender',  
					pass_expiry = '$pass_expiry',  
					travdocno = '$travdocno',  
					travdoctype = '$travdoctype',  
					nick_name = '$nick_name' 
					WHERE id = '$id'");
	
	
	
 	if($count_info == 0){
		mysql_query("INSERT INTO tbl_employee_info (employee_id,basic_salary,basic_tax) VALUES ('$employee_id','$basic_pay','$tax_pay')");
		echo "<script>document.location.href='view_info_employee2.php?id=$id'</script>";
        echo "<script>'Content-type: application/octet-stream'</script>"; 
	}else{
		mysql_query("UPDATE tbl_employee_info SET basic_salary = '$basic_pay', basic_tax = '$tax_pay' WHERE employee_id = '$employee_id'");
		echo "<script>document.location.href='view_info_employee2.php?id=$id'</script>";
        echo "<script>'Content-type: application/octet-stream'</script>";
	} 
	
	
	
}

if(isset($_POST['update2'])){
	echo "boom";
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
			<form enctype="multipart/form-data" id="validate" name="frmAdd" method="post" class = "form">
					<fieldset> 
							<div class="formRow">
								<label><b>Name:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "emp_name" value = "<?php echo $row_employee['fullname']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Alias (if any):</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "nick_name" value = "<?php echo $row_employee['nick_name']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Identity Card No:</b></label>
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
										  <option value="<?php echo $row_employee['gender']; ?>"><?php echo $row_employee['gender']; ?></option>
										  <option value="M">M</option>
										  <option value="F">F</option>
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
								<label><b>Travel Document Type:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "travdoctype" value = "<?php echo $row_employee['travdoctype']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Travel Document No:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "travdocno" value = "<?php echo $row_employee['travdoctype']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Country of Birth:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "countrybirth" value = "<?php echo $row_employee['countrybirth']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Position:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "emp_position" value = "<?php echo $row_employee['position']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Pass Expiry:</b></label>
								<div class="formRight"><input class="datepicker" style = "width:200px;" type = "text" name = "pass_expiry" value = "<?php echo $row_employee['pass_expiry']; ?>" /></div>
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
								<label><b>Sick Leave:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "sick_leave" value = "<?php echo $row_employee['sick_leave']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Vacation Leave:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "vacation_leave" value = "<?php echo $row_employee['vacation_leave']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<!--<div class="formRow">
								<label><b>Child Care Leave:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "" value = "" /></div>
								<div class="clear"></div>
							</div>-->
							<div style = "padding:30px;">
							<b>IN CASE OF EMERGENCY:</b>
								<div class="formRow">
									<label><b>Next of kin</b></label>
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
							<div class="formRow">
								<label><b>Dependents</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "dependents" value = "<?php echo $row_employee['dependents']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Marital Status</b></label>
									<div class="formRight">
											 <select style = "width:200px;" name = "employee_type">
											  <option value="<?php echo $employee_type; ?>"><?php echo $employee_type; ?></option>
											  <option value="Single">Single</option>
											  <option value="Married">Married</option>
											  <option value="Divorced">Divorced</option>
											  <option value="Separated">Separated</option>
											  <option value="Widowed">Widowed</option>
											</select> 
									</div>
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
							<div style = "padding:30px;">
								<b>Educational Attainment:(Tertiary/Course)</b>
								<div class="formRow">
									<label><b>Educational Background</b></label>
									<div class="formRight"><input style = "width:200px;" type = "text" name = "educbg" value = "" /></div>
									<div class="clear"></div>
								</div>
								<div class="formRow">
									<label><b>Name of school</b></label>
									<div class="formRight"><input style = "width:200px;" type = "text" name = "nameschool" value = "" /></div>
									<div class="clear"></div>
								</div>
								<div class="formRow">
									<label><b>From </b></label>
									<div class="formRight"><input class="datepicker" style = "width:200px;" type = "text" name = "fromschool" value = "" /></div>
									<div class="clear"></div>
								</div>
								<div class="formRow">
									<label><b>To</b></label>
									<div class="formRight"><input class="datepicker" style = "width:200px;" type = "text" name = "toschool" value = "" /></div>
									<div class="clear"></div>
								</div>
							</div>
							<div style = "padding:30px;">
								<b>Employment Record:(Most Recent)</b>
								<div class="formRow">
									<label><b>Name of the employer</b></label>
									<div class="formRight"><input style = "width:200px;" type = "text" name = "employername" value = "" /></div>
									<div class="clear"></div>
								</div>
								<div class="formRow">
									<label><b>Position / Occupation</b></label>
									<div class="formRight"><input style = "width:200px;" type = "text" name = "posoccu" value = "" /></div>
									<div class="clear"></div>
								</div>
								<div class="formRow">
									<label><b>Nature of Duties</b></label>
									<div class="formRight"><input style = "width:200px;" type = "text" name = "naturedut" value = "" /></div>
									<div class="clear"></div>
								</div>
								<div class="formRow">
									<label><b>From </b></label>
									<div class="formRight"><input class="datepicker" style = "width:200px;" type = "text" name = "fromemployment" value = "" /></div>
									<div class="clear"></div>
								</div>
								<div class="formRow">
									<label><b>To</b></label>
									<div class="formRight"><input class="datepicker" style = "width:200px;" type = "text" name = "toemployment" value = "" /></div>
									<div class="clear"></div>
								</div>
							</div>
							
							<div class="formSubmit"><input type="submit" name = "update" value="UPDATE" class="blueB" /></div>
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