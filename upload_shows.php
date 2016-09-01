<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");
			
			
			$date_added = date('r');
			$date_tracked = strtotime($date_added);
			
			$title = $_POST['title'];
			$time = $_POST['time'];
			$dj = $_POST['dj'];
			$ordered = $_POST['ordered'];
			
			if(!empty($_FILES['image']['tmp_name']))
			{
						$path = "shows_image/";
						$show_avatar = $path.basename($_FILES['image']['name']);
						
						
						if (move_uploaded_file($_FILES['image']['tmp_name'], $show_avatar))
							{
										$sth = mysql_query("INSERT INTO tbl_shows
													(shows_title,
													 shows_time,
													 dj,
													 image,
													 ordered
													 )
													VALUES
													('$title',
													 '$time',
													 '$dj',
													 '$show_avatar',
													 '$ordered'
													)
													");
													
										if($sth)
											{
												echo "<script> alert('Successfully added!');</script>";
												echo "<script>document.location.href='shows.php'</script>";
											}
										else
											{
												echo "<script> alert('Failed to add!');</script>";
											}											
										
										
										
							}
							else
							{
								echo 3;
							}
			}
			else
			{
				echo 2;
			}
			
			
			
			
?>