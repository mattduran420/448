	<?php
		include('header.php');
	

		$comic = $_GET['comic_id'];
		

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
		$comic_data = mysql_query("SELECT (comic_name, genre, tag, upload_date, user_id, comic_status, rating_total, rating_count) FROM db_comic WHERE comic_id = $comic");
		//Display comment on the page
		$getquery = mysql_query("SELECT * FROM db_comment ORDER BY user_id DESC");
			while($rows = mysql_fetch_array($getquery)){
				$user_id = $rows['user_id'];
				$comic = $rows['comic'];
				$comment = $rows['comment'];

				echo $user_id . '<br />' . $comment;
			}
		?>


		<img src = "http://userpages.umbc.edu/~mduran2/is448/project/images.php?id=<?php echo $comic; ?>">
		<form>
			<textarea id = "comment_area">
				
			</textarea>
			<input type="submit" name="submit" value="Submit" />
			<input type="reset" name="reset" value="Clear" />
		</form>
		<?php
		include('footer.php');
	?>
