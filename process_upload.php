<?php
session_start();
include('functions.php');
$myFile = $_FILES['photo']['name'];
$tempFile = $_FILES['photo']['tmp_name'];
$comicSize = $_FILES['photo']['size'];
$db = connectToDB();
if($myFile)
{
	if(!$_FILES['photo']['error'])
	{
		//get file name from form data
		$comic_name = $_POST['comic_name'];
		$genre = $_POST['genre'];
		$tag = $_POST['tag'];
		$status = $_POST['status'];
		$date = date("Y-m-d");
		$user_id = $_SESSION['userID'];
		
		//$new_file_name = strtolower($myFile);

		
		if($comicSize < 2048000){
			
			//move file from temp directory to uploads directory in php-files
			//move_uploaded_file($_FILES['photo']['tmp_name'], $upload_path.$new_file_name);
			//read file and convert to binary
			$file = fopen($tempFile, "rb") or die ("Error - could not open file");
			$payload = fread($file, filesize($tempFile));
			//escape binary data
			$payload = addslashes($payload);
			fclose($file);
			//INSERT IMAGE AS BINARY BLOB INTO DATABASE

			
			$query = "INSERT INTO db_comic (comic_name, genre, tag, upload_date, image_payload, user_id, comic_status, rating_total, rating_count) VALUES('$comic_name','$genre','$tag','$date','$payload',$user_id,$status,0,0)";
			//echo $query;
			
			if(!mysql_query($query,$db)){
			 die('Insert Row Failed!' . mysql_error());
			}else{
				
				header("location: comment_comic.php?comic_id=".mysql_insert_id($db));	
			
		}

		}
	}
}
?>