<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");
			
			$promocode_name = $_POST['promocode_name'];
			$expiration_date = $_POST['expiration_date'];
			$date_added = date('r');
			$date_tracked = strtotime($date_added);
			
			$qry_check_promo = mysql_query("SELECT * FROM tbl_promocode WHERE promocode_name = '$promocode_name'");
			$count_check_promo = mysql_num_rows($qry_check_promo);
			
			if($count_check_promo > 0)
			{
				echo 0;
			}
			else
			{
			
			
				if(!empty($_FILES['image']['tmp_name']))
				{  

						$path = "promo_images/";
						$promo_avatar = $path.basename($_FILES['image']['name']);
						
						
						if (move_uploaded_file($_FILES['image']['tmp_name'], $promo_avatar))
							{
						
										$sth = mysql_query("INSERT INTO tbl_promocode 
															(promocode_name, 
															image_path, 
															date_added, 
															date_tracked, 
															expiration_date) 
															VALUES 
															('$promocode_name',
															'$promo_avatar',
															'$date_added',
															'$date_tracked',
															'$expiration_date')");
										
										if($sth)
											{
												$qry_users = mysql_query("SELECT * FROM tbl_promocode WHERE promocode_name = '$promocode_name'");
				
													$arr = array();
													
														while($rows = mysql_fetch_assoc($qry_users))
															{
																$arr[] =  $rows;
															}
															
															print json_encode($arr);
											}
										else
											{
												print("0");
											}
							}
										
				}
				
				else
				{
					$sth = mysql_query("INSERT INTO tbl_promocode 
															(promocode_name, 
															image_path, 
															date_added, 
															date_tracked, 
															expiration_date) 
															VALUES 
															('$promocode_name',
															'$promo_avatar',
															'$date_added',
															'$date_tracked',
															'$expiration_date')");
										
										if($sth)
											{
												$qry_users = mysql_query("SELECT * FROM tbl_promocode WHERE promocode_name = '$promocode_name'");
				
													$arr = array();
													
														while($rows = mysql_fetch_assoc($qry_users))
															{
																$arr[] =  $rows;
															}
															
															print json_encode($arr);
											}
										else
											{
												print("0");
											}
					
				}
			
						
			}
			
			
?>