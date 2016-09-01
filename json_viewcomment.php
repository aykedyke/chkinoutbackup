<?php
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$song_id = $_GET['id'];
			$comment_query = mysql_query("SELECT tbl_user.user_dname, tbl_comment.comment FROM tbl_user,tbl_comment WHERE tbl_comment.user_id = tbl_user.user_id AND tbl_comment.song_id = '$song_id'");
			$comment_arr = array();
			while($row_comment = mysql_fetch_array($comment_query)){
				$user_dname = $row_comment['user_dname'];
				$comment = $row_comment['comment'];
				
				$comment_arr[] = array("Name" => $user_dname,
									   "Comment" => $comment
										);
			}
		$data = array('status' => "Success",
			'Comment' => $comment_arr
			 );
						
		print json_encode($data);

?>