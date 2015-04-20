<?php

$db = mysql_connect("studentdb.gl.umbc.edu","mduran2","mduran2");
if(!$db) exit("Error - could not connect to MySQL");

$er = mysql_select_db("mduran2");
if(!$er) exit("Error - could not select db_user database");

if($_FILES['photo']['name'])
{
	if(!$_FILES['photo']['error'])
	{
		//get file name from form data
		$comic_name = $_POST['comic_name'];
		$genre = $_POST['genre'];
		$tag = $_POST['tag'];
		$status = $_POST['status'];
		$date = '2015-04-15';
		//$user_id = $_SESSION['userID'];
		$user_id = 1;
		$new_file_name = strtolower($_FILES['photo']['name']);

		
		if($_FILES['photo']['size'] < 2048000){
			
			//move file from temp directory to uploads directory in php-files
			//move_uploaded_file($_FILES['photo']['tmp_name'], $upload_path.$new_file_name);
			//read file and convert to binary
			$file = fopen($_FILES['photo']['tmp_name'], "rb") or die ("Error - could not open file");
			$payload = fread($file, filesize($_FILES['photo']['tmp_name']));
			//escape binary data
			$payload = addslashes($payload);
			fclose($file);
			//INSERT IMAGE AS BINARY BLOB INTO DATABASE

			
			$query = "INSERT INTO db_comic (comic_name, genre, tag, upload_date, image_payload, user_id, comic_status, rating_total, rating_count) VALUES('$comic_name','$genre','$tag','$date','$payload','$user_id','$status',0,0)";
			
			if(!mysql_query($query,$db)){
			 die('Insert Row Failed!' . mysql_error());
			}else{
			header("location: comment_comic.php?comic_id=".mysql_insert_id());	
		}

		}
	}
}
?>