<?php

	$comment_body = $_POST['comment_area'];
	$user_id = 1;
	$comic_id = $_POST['comic_id'];
	$timestamp = '2015-04-21 22:34:52';

	$db = connectToDB();
	
	$store_comment = "INSERT INTO db_comment(user_id, comic_id, comment_body, timestamp) 
				VALUES('$user_id','$comic_id','$comment_body','$timestamp')";
	mysql_query($store_comment);
	header("location: comment_comic.php?comic_id=".$comic_id);	
?>