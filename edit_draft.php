<?php include('header.php'); ?>
<?php

$db = mysql_connect("studentdb.gl.umbc.edu","mduran2","mduran2");
if(!$db) exit("Error - could not connect to MySQL");

$er = mysql_select_db("mduran2");
if(!$er) exit("Error - could not select db_user database");
?>
<!-- EDIT HERE -->
<div align="center">
	<?php
		$querystring  = "SELECT comic_id,comic_name, genre, tag, upload_date FROM db_comic
			where comic_id = " . $_GET['id'];
		$results = mysql_query($querystring, $db);
		if(!$results){
			die("error:" . mysql_error());
		}
		while($row = mysql_fetch_array($results)){
			echo "<h1>" . $row['comic_name'] . "</h1>";
			echo "<h2>Draft</h2>";
		}

	?>
	<div id="comic-playground">
		<div id="note-container">
			<!-- <div class="comic-note" style="margin-top:88px;margin-left:55px;">
				<a class="note-link" href="javascript:void(0)" onclick="toggleNote('note-1');">X</a>
				<div class="note-body" id="note-1">
					<p>Note added by <a href="#">Jake</a><br/>
					1:58 AM 3/17/2015
					</p>
					<p>I have no friends!</p>
				</div>
			</div> -->
			<img id="comic" src="images.php?id=<?php echo $_GET['id']; ?>" class="comic-spotlight">
		</div>
	</div>
</div>
<!-- example add note form with no javascript -->
<form action="process_note.php" method="post">
	<input type="hidden" name="comic_id" value="<?php echo $_GET['id']; ?>"><br/>
	<textarea name="note">
	</textarea><br/>
	<input type="submit" value="Leave Note!">
</form>
<br/>

<!-- end example -->
<!-- BEGIN LISTED NOTES -->
<div class="something">
<?php
	$querystring  = "select * from db_note where comic_id = " . $_GET['id'];
	$results = mysql_query($querystring, $db);
	if(!$results){
		die("error:" . mysql_error());
	}
	else{
		while($row = mysql_fetch_array($results)){ ?>
		<div class="comment-body">
			<p><?php echo "<p>" . $row['noteContent'] . "</p>"; ?></p>
			<p><?php echo "<p>" . $row['note_time'] . "</p>"; ?></p>
		</div>
<?php }
}
?>
</div>
<!-- end listed notes -->
<?php include('footer.php'); ?>