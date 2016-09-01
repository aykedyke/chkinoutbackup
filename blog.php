<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}
?>


<?php include('header.php'); ?>

<body>



    
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>DashBoard</h5>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
    
    <div class="line"></div>
    <!-- Main content wrapper -->
    <div class="wrapper">
       <br>
	   <div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Album List of <?php echo $row_artist['fullName']; ?></h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
            <tr>
			
			<th  style = "background:#4c4c4c">Album Name</th>
			<th  style = "background:#4c4c4c">Album Image</th>
			<th  style = "background:#4c4c4c">Release Date</th>
			<th  style = "background:#4c4c4c">View Songs</th>
			<th  style = "background:#4c4c4c">Edit</th>
			<th  style = "background:#4c4c4c">Delete</th>
			
			
            </tr>
            </thead>
            <tbody>
          
			<?php
				$qry_users = mysql_query("SELECT * FROM tbl_album");
				while($row_users = mysql_fetch_array($qry_users))
				{
			?>
					<tr>
						<td><center><?php echo $row_users['album_name']; ?></center> </td>
						<td><center><a href = "<?php echo $row_users['album_image']; ?>"><img src = "<?php echo $row_users['album_image']; ?>" height = "50px" width = "50px" /></a></center> </td>
						<td><center><?php echo $row_users['album_date']; ?></center> </td>
						<td> <center><a href = "view_song.php?id=<?php echo $row_users['album_id']; ?>">VIEW </a> </center> </td>
						<td> <center><a href = "update_event.php?id=<?php echo $row_users['artist_id']; ?>">EDIT </a> </center> </td>
						<td><center><a onclick="return confirm('Are you sure you want to delete?');" href = "delete_event.php?id=<?php echo $row_users['artist_id']; ?>">DELETE </a> </center></td>
					</tr>
			<?php
				}
			?>
			
           
            </tbody>
            </table>
			
        </div>
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