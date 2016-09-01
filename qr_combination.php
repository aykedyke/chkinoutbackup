<?php
require_once("mod_lib/connection.php");//database connectivity
        //include('mod_lib/site.ini.php');
include("mod_lib/ConnectionMgr.php");
$con = new ConnectionMgr(); //initialize the connection string

?>



<html>
<head>
</head>
<body>
			  <form enctype="multipart/form-data" name="frmAdd" method="post" action="reg_combination.php" class = "frm_container">
              <div>
              
              <br>
			 
								<label>1st QR</label>
								<div class="formRight">
								<select name="initial_qr_id" id="req" class="clear">
								<?php
								$qry_qr_details = mysql_query("SELECT * FROM tbl_qr_details");
								while($row_qr_details = mysql_fetch_array($qry_qr_details))
								{
								?>
								<option value = "<?php echo $row_qr_details['qr_details_id'];?>"><?php echo $row_qr_details['result_qr'];?></option>
								<?php
								}
								?>
								</select>
								</div>
			  </br></br>
			  
			  <br>
			 
								<label>2nd QR</label>
								<div class="formRight">
								<select name="final_qr_id" id="req" class="clear">
								<?php
								$qry_qr_details = mysql_query("SELECT * FROM tbl_qr_details");
								while($row_qr_details = mysql_fetch_array($qry_qr_details))
								{
								?>
								<option value = "<?php echo $row_qr_details['qr_details_id'];?>"><?php echo $row_qr_details['result_qr'];?></option>
								<?php
								}
								?>
								</select>
								</div>
			  </br></br>
			  
			  <br>
			 
								<label>Promo Code</label>
								<div class="formRight">
								<select name="promocode_id" id="req" class="clear">
								<?php
								$qry_tbl_promocode = mysql_query("SELECT * FROM tbl_promocode");
								while($row_tbl_promocode = mysql_fetch_array($qry_tbl_promocode))
								{
								?>
								<option value = "<?php echo $row_tbl_promocode['promocode_id'];?>"><?php echo $row_tbl_promocode['promocode_name'];?></option>
								<?php
								}
								?>
								</select>
								</div>
			  </br></br>
				
             
             
              </div>
                

    

              </div>

       
        
                  <!--/ADDITIONALS-->
                  
              <div style="margin-bottom: 15px;">
              <input type="submit" style="font-size: 19px; padding: 8px 3px; background:#EFD9B3; border:2px solid #AF976D; color: #303030;" name="upload" value="Register Combination">
              </div>
              
              <?php
                //unset($_SESSION['STATUS']);
              ?>
                  
              </form>
</body>
</html>
