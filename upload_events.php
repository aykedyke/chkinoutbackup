<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");
			
			
			$date_added = date('r');
			$date_tracked = strtotime($date_added);
			$title = $_POST['title'];
			$subtitle = $_POST['subtitle'];
			$desc = $_POST['description'];
			$when = $_POST['when'];
			$where = $_POST['where'];
			
			if(!empty($_FILES['image']['tmp_name']))
			{
				$path = "events_images/";
						$event_avatar = $path.basename($_FILES['image']['name']);
						
						
						if (move_uploaded_file($_FILES['image']['tmp_name'], $event_avatar))
							{
										$sth = mysql_query("INSERT INTO tbl_events
													(event_image,
													event_title,
													event_subtitle,
													event_desc,
													event_when,
													event_where,
													date_added,
													date_tracked,
													thumb_image)
													VALUES
													('$event_avatar',
													'$title',
													'$subtitle',
													'$desc',
													'$when',
													'$where',
													'$date_added',
													'$date_tracked',
													'$event_avatar'
													
													)");
													
										if($sth)
											{
												echo "<script> alert('Successfully added!');</script>";
												echo "<script>document.location.href='events.php'</script>";
											}
										else
											{
												echo "<script> alert('Failed to add!');</script>";
											}											
										
										
										
							}
			}
			
			
			
			
?>