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

$info_employee = mysql_query("SELECT * FROM tbl_employee_info WHERE employee_id = '$employee_id'");
$count_info = mysql_num_rows($info_employee);
$row_info = mysql_fetch_array($info_employee);

$manda_employee = mysql_query("SELECT * FROM tbl_deduction WHERE emp_id = '$id' AND deduction_name = 'SSS'");
$count_manda = mysql_num_rows($manda_employee);
$row_manda = mysql_fetch_array($manda_employee);

date_default_timezone_set('Asia/Manila');

	$year = date('Y');
	$month = date('m');
	$yearmonth = $year.''.$month;

	$check_serial = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '".$_SESSION['company']."' AND employee_id LIKE '%$yearmonth%' ORDER BY id DESC LIMIT 1");
	$serial_check = mysql_fetch_array($check_serial);

	$serial = $serial_check['employee_id'];
	$serial = substr($serial, 7); 
	if($serial == ""){
		$serial = "001";
		$serial = $yearmonth.'-'.$serial;
	}else{
		$serial = $serial + 1;
		$serial = str_pad($serial, 3, '0', STR_PAD_LEFT);
		$serial = $yearmonth.'-'.$serial;
	}

if($count_info == 0){
	$basic_salary = 0;
	$basic_tax = 0;
}else{
	$basic_salary = $row_info['basic_salary'];
	$basic_tax = $row_info['basic_tax'];
}

if(isset($_POST['add'])){
	$basic_pay = $_POST['basic_pay'];
	$start_date = $_POST['start_date'];
	$birth_date = $_POST['birth_date'];
	$data = $_POST['data'];
	$emp_name = $_POST['emp_name'];
	$nick_name = $_POST['nick_name'];
	$emp_position = $_POST['emp_position'];
	$dependents = $_POST['dependents'];
	$employee_status = $_POST['employee_status'];
	$employee_type = $_POST['employee_type'];
	$employee_time = $_POST['employee_time'];
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
	$emergency_contactperson = $_POST['emergency_contactperson'];
	$relationship = $_POST['relationship'];
	$emergency_contactnumber = $_POST['emergency_contactnumber'];
	$emergency_address = $_POST['emergency_address'];
	// QR PLUGIN //
	$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'qr_plugin/temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'qr_plugin/temp/';

    include "qr_plugin/qrlib.php";    
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_TEMP_DIR.'test.png';
    
    //processing form input
    //remember to sanitize user input in real-life solution !!!
    $errorCorrectionLevel = 'L';
    if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
        $errorCorrectionLevel = $_REQUEST['level'];    

    $matrixPointSize = 4;
    if (isset($_REQUEST['size']))
        $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);


    if (isset($_REQUEST['data'])) { 
    
        //it's very important!
        if (trim($_REQUEST['data']) == '')
            die('data cannot be empty! <a href="?">back</a>');
            
        // user data
        $filename = $PNG_TEMP_DIR.''.md5($_REQUEST['data'].'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
        QRcode::png($_REQUEST['data'], $filename, $errorCorrectionLevel, $matrixPointSize, 2);  
		
		$filename_path = $PNG_WEB_DIR.''.md5($_REQUEST['data'].'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
        QRcode::png($_REQUEST['data'], $filename, $errorCorrectionLevel, $matrixPointSize, 2);  
        
    } else {
    }
	
	// END QR PLUGIN//
	
	
	//mysql_query("INSERT INTO tbl_employee (fullname,department_id,company_id,employee_id,qr_image,position,birthday,start_date,status,employee_time) VALUES ('$emp_name','$department','".$_SESSION['company']."','$data','$filename_path','$emp_position','$birth_date','$start_date','$employee_type','$employee_time')");
	mysql_query("INSERT INTO tbl_employee 
									(fullname,
									 nick_name,
									 department_id,
									 company_id,
									 employee_id,
									 qr_image,
									 position,
									 birthday,
									 start_date,
									 emergency_contactperson,
									 relationship,
									 emergency_contactnumber,
									 emergency_address,
									 status) 
								VALUES   
									('$emp_name',
									 '$nick_name',
									 '$department',
									 '".$_SESSION['company']."',
									 '$data',
									 '$filename_path',
									 '$emp_position',
									 '$birth_date',
									 '$start_date',
									 '$emergency_contactperson',
									 '$relationship',
									 '$emergency_contactnumber',
									 '$emergency_address',
									 '$employee_type')");
									 
	echo "<script>document.location.href='view_employee.php'</script>";
        echo "<script>'Content-type: application/octet-stream'</script>"; 
	
}
?>


<?php include('header.php'); ?>

<body>
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5 style = "">Adding Employee</h5>
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
								<label><b>Employee ID:</b></label>
								<?php
								if($_SESSION['company'] == 2){
									?>
										<div class="formRight"><input style = "width:200px;" type = "text" name = "data" value = "<?php echo $serial;?>" /></div>
									<?php
								}else{
									?>
										<div class="formRight"><input style = "width:200px;" type = "text" name = "data" value = "" /></div>
									<?php	
								}
								?>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Name:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "emp_name" value = "" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Nickname/Alias:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "nick_name" value = "" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Position:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "emp_position" value = "" /></div>
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
								<div class="formRight"><input class="datepicker" style = "width:200px;" type = "text" name = "birth_date" value = "" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Start Date:</b></label>
								<div class="formRight"><input class="datepicker" style = "width:200px;" type = "text" name = "start_date" value = "" /></div>
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
							<div class="formSubmit" ><input onclick="return confirm('Are you sure you want to add this employee?');" type="submit" name = "add" value="ADD" class="blueB" /></div>
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