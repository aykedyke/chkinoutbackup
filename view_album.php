<?php

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}
	
$artist_id = $_GET['id'];
$artist_qry = mysql_query("SELECT * FROM tbl_artist WHERE artist_id = '$artist_id'");
$row_artist = mysql_fetch_array($artist_qry);

if(isset($_POST['add_album'])){
	$album_name = $_POST['album_name'];
	$date_tracked = strtotime($_POST['date']);
	$date = date("F d, Y", $date_tracked);
	if(!empty($_FILES['image']['tmp_name']))
	{
		$path = "album_image/";
		$album_avatar = $path.basename($_FILES['image']['name']);
		
		if (move_uploaded_file($_FILES['image']['tmp_name'], $album_avatar)){
			$album_qry = mysql_query("INSERT INTO tbl_album (artist_id, album_name, album_date, album_image) VALUES ('$artist_id','$album_name','$date','$album_avatar')");
			if($album_qry){
				$last_id = mysql_query("SELECT * FROM tbl_album ORDER BY album_id DESC");
				$row_last_id = mysql_fetch_array($last_id);
				$last_album_id = $row_last_id['album_id'];
				mkdir("album".$last_album_id."");
				echo "<script>alert('Album Successfully Added!');</script>";
			}
		}
	}
}

?>

<?php include('header.php'); ?>

<body>



    
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>ARTIST : <?php echo $row_artist['fullName']; ?></h5>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
	
     <div class="statsRow">
        <div class="wrapper">
        	<div class="controlB">
            	<ul>
                    <li onclick = "add_student()"><a href="javascript:void" title=""><img src="images/icons/control/32/hire-me.png" alt="" /><span>Add New Album</span></a></li>
				</ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    
    <div class="line"></div>
    <!-- Main content wrapper -->
    <div class="wrapper">
       <br>
	   <div id = "add_artist" style = "display:none;">
		 <form enctype="multipart/form-data" id="validate" name="frmAdd" method="post" action="" class = "form">
              <fieldset>               
			  <div>
		<div class="formRow">
                        <label>Album Image</label>
                        <div class="formRight"><input type="file" name="image" id="image_path" onchange="preview(this);"/></div>
                        <div class="clear"></div>
        </div>
		<div class="formRow">
			<label></label>
			<div class="formRight"><img  id="preview_image" alt="" src="<?php echo $row_ad['event_image']; ?>" /></div>
			<div class="clear"></div>
		</div>
			  <div class="formRow">
                        <label>Album Name</label>
                        <div class="formRight"><input type="text" name="album_name" /></div>
                        <div class="clear"></div>
              </div>
			  <div class="formRow">
					<label>Date</label>
					<div id = "form_date" class="formRight">
					<input type="text" class="datepicker" name="date" style = "width:110px !important;" />
					</div>
					<div class="clear"></div>
			  </div>
			  <div class="formSubmit"><input type="submit" name = "add_album" value="submit" class="redB" /><input onclick="cancel_add()" type="button" value="Cancel" class="redB" /></div>
              <div class="clear"></div>
             </div>
                 </fieldset> 
              </form>
		</div>
	   <br>
	   <div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Album List of <?php echo $row_artist['fullName']; ?></h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
            <tr>
			
			<th style = "background:#4c4c4c">Album Name</th>
			<th style = "background:#4c4c4c">Album Image</th>
			<th style = "background:#4c4c4c">Release Date</th>
			<th style = "background:#4c4c4c">View Songs</th>
			<th style = "background:#4c4c4c">Edit</th>
			<th style = "background:#4c4c4c">Delete</th>
			
			
            </tr>
            </thead>
            <tbody>
          
			<?php
				$qry_users = mysql_query("SELECT * FROM tbl_album WHERE artist_id = '$artist_id'");
				while($row_users = mysql_fetch_array($qry_users))
				{
			?>
					<tr>
						<td><center><?php echo $row_users['album_name']; ?></center> </td>
						<td><center><a href = "<?php echo $row_users['album_image']; ?>"><img src = "<?php echo $row_users['album_image']; ?>" height = "50px" width = "50px" /></a></center> </td>
						<td><center><?php echo $row_users['album_date']; ?></center> </td>
						<td> <center><a href = "view_song.php?id=<?php echo $row_users['album_id']; ?>">VIEW </a> </center> </td>
						<td> <center><a href = "update_event.php?id=<?php echo $row_users['artist_id']; ?>"><img height = "30px" src = "images/edit_button.png" /> </a> </center> </td>
						<td><center><a onclick="return confirm('Are you sure you want to delete?');" href = "delete_event.php?id=<?php echo $row_users['artist_id']; ?>"><img src = "images/del_button.png" height = "30px" /> </a> </center></td>
					</tr>
			<?php
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
        <div class="wrapper">As usually all rights reserved. And as usually brought to you by <a href="http://themeforest.net/user/Kopyov?ref=kopyov" title="">Eugene Kopyov</a></div>
    </div>

</div>

<div class="clear"></div>

<script>
	function add_student(){
		$('#add_artist').fadeIn();
	}
	function cancel_add(){
		$('#add_artist').fadeOut();
	}
	function preview(input) 
					{
						if (input.files && input.files[0]) {
							var reader = new FileReader();
							
							reader.onload = function (e) {
								$('#preview_image')
									.attr('src', e.target.result)
									.width(200)
									.height(150);
							};

							reader.readAsDataURL(input.files[0]);
							
							var path = $("#image_path").val();
							if ($.browser.mozilla) {
							$("#paste_code").val("<img src='images/slides/"+path+"' class='content_img_style'/>");
							}
							else{
							var path = path.replace(/\\/g, "~");
							var path = path.split("~");

							$("#paste_code").val("<img src='images/slides/"+path[2]+"' class='content_img_style'/>");
							}
						}
					}
</script>

</body>
</html>