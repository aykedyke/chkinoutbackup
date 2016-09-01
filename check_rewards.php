<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$device_id = $_GET['device_id'];


			$select_redeem_code_from_id = mysql_query("SELECT tbl_record.redeem_code,
								tbl_record.device_id,
								tbl_promocode.promocode_name,
								tbl_promocode.image_path,
								tbl_promocode.expiration_date,
								tbl_record.date_added
							FROM tbl_record,
								 tbl_promocode
							WHERE tbl_record.device_id = '$device_id' AND
								tbl_record.promocode_id = tbl_promocode.promocode_id ORDER BY tbl_record.date_tracked DESC");
								
			$count_record = mysql_num_rows($select_redeem_code_from_id);
			
			$arr = array();
			while($rows_select_redeem_code_by_id = mysql_fetch_assoc($select_redeem_code_from_id))
				{
					$redeem_code = $rows_select_redeem_code_by_id['redeem_code'];
					
					
					$query_tbl_user_prize_won = mysql_query(" SELECT * FROM tbl_user_prize_won WHERE redeem_code = '$redeem_code'");
						$count_tbl_user_prize_won = mysql_num_rows($query_tbl_user_prize_won);
						
							if($count_tbl_user_prize_won<1)
							{
									//echo $redeem_code;
									$arr[] =  $rows_select_redeem_code_by_id;
							}
							else
							{
								
							}
						
							
				}
				
				if($count_record > 0)
				{
					print json_encode($arr);
				}
				else
				{
					echo 0;
				}
				
				
				
				
				
					


				
			/*$arr = array();
				
				while($rows = mysql_fetch_assoc($qry_user))
					{
						$arr[] =  $rows;
					}
						
					print json_encode($arr);*/
?>