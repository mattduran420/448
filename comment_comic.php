<?php
	include('header.php');
	
	$comic = $_GET['comic_id'];
	$user_id = $_SESSION['userID'];
	
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
			<form action = "comment_process.php" id = "commentForm" method = "post" onsubmit = "event.preventDefault(); displayComment();">
				<textarea id = "comment" name = "comment_area" value "Comment here"></textarea>
				<input type="hidden" name="comic_id" value="<?php  echo $comic; ?>" />
				<div id = "star-rating" onclick="countStar()">
					<img class = "button1 " src = "assets/img/white_star.gif" id = "star1"/>
					<img class = "button1" src = "assets/img/white_star.gif" id = "star2"/>
					<img class = "button1" src = "assets/img/white_star.gif" id = "star3"/>
					<img class = "button1" src = "assets/img/white_star.gif" id = "star4"/>
					<img class = "button1"  src = "assets/img/white_star.gif" id = "star5"/>
				</div>
				<div id = "ratingAverage">Average Rate: <? echo ?></div>
				<div id = "submit-button">
				<input type="submit" name="submit" value="Submit" />
				<input type="reset" name="reset" value="Clear" />
				</div>
			</form>
		</div>
		<div id = "commentArea">
			<?php

				$get_comment = "SELECT db_comment.*, db_user.username from db_comment, db_user
							WHERE db_comment.comic_id = ". $comic . " AND db_user.user_id = db_comment.user_id 
							ORDER BY comment_id DESC";
				$query = mysql_query($get_comment);

				if(!$query){
					die('Insert Row Failed!' . mysql_error());
				}
			
				while($rows = mysql_fetch_array($query)){
					$user_id = $rows['user_id'];
					$username= $rows['username'];
					$comment = $rows['comment_body'];
					$timestamp = $rows['timestamp'];

					echo '<div class ="comment-area-wrapper">'.
					'<div id = "user-post">'. $username . '</div>'.
					'<div id = "comment-post">'.$comment .'<div id = "date-post">'. '<p>POST ON : '.$timestamp .'</p>'.
					'</div>'.
					'</div>'.
					
					'</div>';
					
				}
			?>
		</div>
	</div>

<script>
	function displayComment(){
  		var comment = $("comment").value;
  		var comicId = $("comic_id").value;
  		

  		//alert($state);
  		$.ajax({
		method: "POST",
		url: "comment_process.php",
		data: $("#commentForm").serialize()
	})
	.success(function( msg ) {
		console.log('work');
		insertComment();
	})
	.error(function(msg){
		alert("Error: Comment is not inserted.");
	})
	}
	function insertComment(){
		var userID = "<?php echo $_SESSION['userID'];?>"; 
  		var timestamp = new Date();
		timestamp.toISOString().slice(0,10).replace(/-/g, "-");
		var html = '<div class = "comment-area-wrapper">';
			html += "<p>" + $('#comment').val() + "</p>";
			//html += "<p>" + $('#ratingAverage').val() + "</p>";

			html += '</div>';
		$('#commentArea').prepend(html).prepend(userID).prepend(timestamp);
	}
</script>

<?php

	include('footer.php');
?>
