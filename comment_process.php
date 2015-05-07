<?php
	session_start();
	include("functions.php");
	$comment_body = $_POST['comment_area'];
	$user_id = $_SESSION['userID'];
	$comic_id = $_POST['comic_id'];
	$timestamp = time() + (7 * 24 * 60 * 60);
	

	$db = connectToDB();
	if(!$_POST['star']){
		$store_comment = "INSERT INTO db_comment(user_id, comic_id, comment_body, timestamp) 
				VALUES('$user_id','$comic_id','$comment_body','$timestamp')";
			mysql_query($store_comment);
			//header("location: comment_comic.php?comic_id=".$comic_id);	
	} else {
		$postrating = "UPDATE db_comic SET rating_count = (rating_count + 1), (rating_total = rating_total + postrating) 
					WHERE comic_id = $comic_id";
			
	}

	
	
?>