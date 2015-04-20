<?php
//Seri Ngaothong

	$comment_body = $_POST['comment_area'];
	$user_id = 1;
	$comic_id = $_POST['comic_id'];
	$timestamp = '2015-04-21 22:34:52';

	$db = mysql_connect("studentdb.gl.umbc.edu","mduran2","mduran2");
		if(!$db) exit("Error - could not connect to MySQL");

	$er = mysql_select_db("mduran2");
		if(!$er) exit("Error - could not select db_user database");
	
	$store_comment = "INSERT INTO db_comment(user_id, comic_id, comment_body, timestamp) 
				VALUES('$user_id','$comic_id','$comment_body','$timestamp')";
	mysql_query($store_comment);
	header("location: comment_comic.php?comic_id=".$comic_id);	
?>