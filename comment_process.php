<!--Seri Ngaothong -->
<?php
	$comment_body = $_POST['comment_area'];

	$db = mysql_connect("studentdb.gl.umbc.edu","mduran2","mduran2");
		if(!$db) exit("Error - could not connect to MySQL");

	$er = mysql_select_db("mduran2");
		if(!$er) exit("Error - could not select db_user database");
	
	$store_comment = "INSERT INTO db_comment(user_id, comic_id, comment_body, timestamp) 
				VALUES('$comic_name','$genre','$comment_body','$date')";

	$get_comment = "SELECT * FROM db_comment";
	while($rows = mysql_fetch_array($get_comment)){
				$user_id = $rows['user_id'];
				$comic = $rows['comic_id'];
				$comment = $rows['comment_body'];
				$timestamp = $row['timestamp'];

				echo $user_id . '<br />' . $comic . '<br />' . $comment . '<br />'.$timestamp;
			}


?>