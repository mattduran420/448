<html>
<head>
	<title>
		Display Comics
	</title>
</head>

<body>

	<?php
		include('access_database.php');
		$comic_name = $_POST('comic');
		$genre = $_POST('genre');
		$date = $_POST('upload_date');
		$image = $_POST('image');
		
	//fileToUpload is a value of name attribute in file input
		$insert_comic = "INSERT INTO db_comic(comic_name, genre, upload_date, img_url)
						values($comic_name, $genre, $date, $image)";
		$rating_comic = $_POST('rating_comic');
		$fileLocation = mysql_query($insert_comic);
		//$target_dir = "uploads/";
		$target_file = $fileLocation.basename($_FILES["comic"]["name"]);
		$fileUploaded = 1;
		$fileExtentionType = pathinfo($target_file, PATHINFO_EXTENSION);
			if(isset($_POST["submit"])){
				$check = getimagesize($_FILES["comic"]["tmp_name"]);
				if($check !== false){
					echo "File is an image -" . $check["mime"] . ".";
					$fileUploaded = 1;
				
				} else {
					echo "File is not an image"};
					$fileUploaded = 0;
				}
			}

			//Check if file already exists
			if(file_exists($target_file)){
				echo "File already exists";
				$fileUploaded = 0;
			}

			// Allow certain file formats
			if(fileExtentionType != "jpg" && ileExtentionType != "png" 
				&& ileExtentionType != "jpeg" && ileExtentionType != "gif"){
				echo "Allow only JPG, PNG, JPEG, and GIF";
				$fileUploaded = 0;
			}

			// Check if file is uploaded
			if($fileUploaded == 0){
				echo "File is not uploaded";
			} else 
			if(move_uploaded_file($_FILES["comic"] ["tmp_name"], $target_file)) {
				echo "File" . basename(($_FILES["comic"]["name"])). "has been uploaded.";
			} else {
				echo "Error - file cannot be uploaded";
			}

			// Display the image after uploaded
			$selectComicQuery = "SELECT img_url from db_comic ORDER BY comic_id DESC";
			$comicToDisplay = mysql_query($selectComicQuery);
			$insert_rating = "INSERT INTO db_comic(comic_name, genre, upload_date, img_url, user_id, comictag_id, tag_id, rating_total, rating_count)
							values()";
			echo mysql_result($comicToDisplay, row)

	?>
</body>

</html>