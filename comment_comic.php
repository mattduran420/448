<html>
<head>
	<title>
		Display Comics
	</title>
</head>

<body>

	<?php
		$username = $_POST('username');
		$comic = $_POST('comic');
		$comment = $_POST('comment');

		//Connect to the database
		$comic_table = mysql_connect("studentdb.gl.umbc.edu", "mduran2", "mduran2");
			if(!$comic_table){
				exit("Error - could not connect to Comic Database");
			}
		//Select the database
		$select_table = mysql_select_db("mduran2");
			if(!$select_table){
				exit("Error - Could not access to Comic Table");
			}
		//Upload data into the database

		$comic_upload = "INSERT INTO db_comment(user_id, comic_id, comment_body) values($user, $comic, $comment)";
		
		//Display comment on the page
		$getquery = mysql_query("SELECT * FROM db_comment ORDER BY user_id DESC");
			while($rows = mysql_fetch_array($getquery)){
				$user_id = $rows['user_id'];
				$comic = $rows['comic'];
				$comment = $rows['comment'];

				echo $user_id . '<br />' . $comment;
			}
	?>
</body>

</html>