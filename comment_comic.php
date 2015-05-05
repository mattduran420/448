<?php
	include('header.php');
	
	$comic = $_GET['comic_id'];
	
	//Connect to the database
	$db = connectToDB();

	//Upload data into the database
	$comic_data = mysql_query("SELECT (comic_name, genre, tag, upload_date, user_id, comic_status, rating_total, rating_count) 
			FROM db_comic WHERE comic_id = $comic");
		
?>

	<div id = "comic-wrapper">
		<div id = "comic-display">
			<img id = "image" src = "http://userpages.umbc.edu/~nseri1/is448/project/images.php?id=<?php echo $comic; ?>"><br />
		</div>

		<div id = "form-area">
			<form action = "comment_process.php" method = "post">
				<textarea name = "comment_area" value "Comment here"></textarea>
				<input type="hidden" name="comic_id" value="<?php  echo $comic; ?>" />
				<div id = "star-rating">
					<img class = "button1 " src = "assets/img/white_star.gif" id = "star1"/>
					<img class = "button1" src = "assets/img/white_star.gif" id = "star2"/>
					<img class = "button1" src = "assets/img/white_star.gif" id = "star3"/>
					<img class = "button1" src = "assets/img/white_star.gif" id = "star4"/>
					<img class = "button1"  src = "assets/img/white_star.gif" id = "star5"/>
				</div>
				<div id = "submit-button">
				<input type="submit" name="submit" value="Submit" />
				<input type="reset" name="reset" value="Clear" />
				</div>
			</form>
		</div>
		
			<?php

				$get_comment = "SELECT * from db_comment 
							WHERE comic_id = ". $comic . " ORDER BY comment_id DESC";
				$query = mysql_query($get_comment);
				$query1 = mysql_query($comic_data);
				/*$image = mysql_fetch_array($query1))
				foreach ($image as $user_image){
					$images = $user_image['$image'];
					echo '$images';
				}*/
				

				if(!$query){
					die('Insert Row Failed!' . mysql_error());
				}
			
				while($rows = mysql_fetch_array($query)){
					$user_id = $rows['user_id'];
					//$comic = $rows['comic_id'];
					$comment = $rows['comment_body'];
					$timestamp = $rows['timestamp'];

					echo '<div id ="comment-area-wrapper">'.
					'<div id = "user-post">'. $user_id . '</div>'.
					'<div id = "comment-post">'.$comment .'</div>'.
					'<div id = "date-post">'. '<p>POST ON : '.$timestamp .'</p></div>'.
					'</div>';
					
				}
			?>
		
	</div>


<?php

	include('footer.php');
?>
