<?php

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(isset($_POST["submit"]))
{
	$file = $_FILES['file']['tmp_name'];
	$handle = fopen($file, "r");
	$c = 0;	
	while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
	{
			
			$fullname = $filesop[0];
			$nickname = $filesop[1];
			$gender = $filesop[2];
			$position = $filesop[3];
			//$department = $filesop[4];
			$employee_id = $filesop[5];
			$start_date = $filesop[6];
			$confirmed_date = $filesop[7];
			$bday = $filesop[8];
			$tin_no = $filesop[9];
			$sss_no = $filesop[10];
			$hdmf_no = $filesop[11];
			$phic_no = $filesop[12];
			$account_no = $filesop[13];
			
			$c_num = $filesop[15];
			$emailadd = $filesop[16];
			$homeadd = $filesop[17];
			$emercp = $filesop[18];
			$emerr = $filesop[19];
			$emercn = $filesop[20];
			$emeradd = $filesop[21];
			
			
			
			$sql = mysql_query("UPDATE tbl_employee SET 
										fullname = '$fullname', 
										nick_name = '$nickname', 
										gender = '$gender', 
										position = '$position', 
										start_date = '$start_date', 
										confirmed_date = '$confirmed_date', 
										birthday = '$bday',
										tin_number = '$tin_no',
										sss_number = '$sss_no',
										hdmf_number = '$hdmf_no',
										philhealth_number = '$phic_no', 
										account_number = '$account_no', 
										contact_number = '$c_num', 
										email_add = '$emailadd', 
										home_address = '$homeadd', 
										emergency_contactperson = '$emercp', 
										relationship = '$emerr', 
										emergency_contactnumber = '$emercn', 
										emergency_address = '$emeradd' 
								
								WHERE employee_id = '$employee_id'");
			
		$xxx = $xxx + 1;
	}
	
		if($sql){
			echo "You database has imported successfully";
		}else{
			echo "Sorry! There is some problem.";
		}
}


?>

<form name="import" method="post" enctype="multipart/form-data">
    	<input type="file" name="file" /><br />
    	<input value = "lasalle09176780380" type="text" name="data" /><br />
        <input type="submit" name="submit" value="Submit" />
</form>

