<?php

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}

$timezone = "Asia/Manila";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
	
$artist_id = $_GET['id'];
$artist_qry = mysql_query("SELECT * FROM tbl_artist WHERE artist_id = '$artist_id'");
$row_artist = mysql_fetch_array($artist_qry);

if(isset($_POST['add_article'])){
	$blog_title = $_POST['article_title'];
	$blog_desc = $_POST['description'];
	$date_tracked = strtotime(date('r'));
	
	if(!empty($_FILES['image']['tmp_name']))
	{
		$path = "article_image/";
		$article_avatar = $path.basename($_FILES['image']['name']);
		
		if (move_uploaded_file($_FILES['image']['tmp_name'], $article_avatar)){
			$article_qry = mysql_query("INSERT INTO tbl_blog
										(artist_id, blog_image, blog_title, blog_description, date_tracked) VALUES 
										('$artist_id','$article_avatar','$blog_title','$blog_desc','$date_tracked')");
			if($article_qry){
				echo "<script>alert('Article successfully added!');</script>";
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
                    <li onclick = "add_student()"><a href="javascript:void" title=""><img src="images/icons/control/32/hire-me.png" alt="" /><span>Add Article</span></a></li>
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
                        <label>Article Cover Image</label>
                        <div class="formRight"><input type="file" name="image" id="image_path" onchange="preview(this);"/></div>
                        <div class="clear"></div>
        </div>
					<div class="formRow">
                        <label></label>
                        <div class="formRight"><img  id="preview_image" alt="" src="<?php echo $row_ad['event_image']; ?>" /></div>
                        <div class="clear"></div>
                    </div>
		   <div class="formRow">
                        <label>Article Title</label>
                        <div class="formRight"><input type="text" name="article_title" /></div>
                        <div class="clear"></div>
                    </div>
			  <div class="formRow">
                        <label>Description</label>
                        <div class="formRight"><textarea id="txtArea" name = "description" rows="10" cols="70"></textarea></div>
                        <div class="clear"></div>
              </div>
			  <div class="formSubmit"><input type="submit" name = "add_article" value="submit" class="redB" /><input onclick="cancel_add()" type="button" value="Cancel" class="redB" /></div>
              <div class="clear"></div>
             </div>
                 </fieldset> 
              </form>
		</div>
	   <br>
	   <div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Article List of <?php echo $row_artist['fullName']; ?></h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
            <tr>
			
			<th style = "background:#4c4c4c">Article Title</th>
			<th style = "background:#4c4c4c">Article Cover Image</th>
			<th style = "background:#4c4c4c">View Full Article</th>
			<th style = "background:#4c4c4c">Edit</th>
			<th style = "background:#4c4c4c">Delete</th>
			
			
            </tr>
            </thead>
            <tbody>
          
			<?php
				$qry_users = mysql_query("SELECT * FROM tbl_blog WHERE artist_id = '$artist_id'");
				while($row_users = mysql_fetch_array($qry_users))
				{
			?>
					<tr>
						<td><center><?php echo $row_users['blog_title']; ?></center> </td>
						<td><center><a href = "<?php echo $row_users['blog_image']; ?>"><img src = "<?php echo $row_users['blog_image']; ?>" height = "50px" /></a></center> </td>
						<td> <center><a href = "view_blog.php?id=<?php echo $row_users['blog_id']; ?>">VIEW </a> </center> </td>
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