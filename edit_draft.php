<?php include('header.php'); ?>
<?php

$db = connectToDB();
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
<form method="post" id="note-content" onsubmit="event.preventDefault(); ajaxNote();">
	<input type="hidden" name="comic_id" value="<?php echo $_GET['id']; ?>"><br/>
	<textarea name="note" id="noteBody"></textarea><br/>
	<input type="submit" value="Leave Note!">
</form>
<br/>

<!-- end example -->
<!-- BEGIN LISTED NOTES -->
<div class="something">
<?php
	$querystring  = "select * from db_note where comic_id = " . $_GET['id'] . " ORDER BY note_time DESC";
	$results = mysql_query($querystring, $db);
	if(!$results){
		die("error:" . mysql_error());
	}
	else{
		$i = 0;
		while($row = mysql_fetch_array($results)){ ?>
		<div class="comment-body">
			<p><?php echo '<p>Comment by <a href="#">User</a> on ' .  $row['note_time'] . "</p>"; ?></p>
			<p><?php echo "<p>" . $row['noteContent'] . "</p>"; ?></p>
		</div>
	<?php
		$i++;
		}
	}
?>
</div>
<!-- end listed notes -->
<script>
var date = new Date();
console.log();
function ajaxNote(){
	console.log($('#note-content').serialize());
	if($("#noteBody").val()){
		$.ajax({
			method: "POST",
			url: "process_note.php",
			data: $("#note-content").serialize()
		})
		.success(function( msg ) {
			appendNote();
		})
		.error(function(msg){
			alert("Error: Note not inserted.");
		})
	}
	else{
		alert("enter something pls");
	}
	return;
}

function appendNote(){
	console.log("append note called");
	var html = '<div class="comment-body">';
	html += "<p>" + $("#noteBody").val() + "</p>";
	html += "<p>" + date.toISOString().slice(0,10).replace(/-/g,"-") + "</p>";
	html += "</div>";
	$(html).insertBefore('.comment-body');
	return;
}
</script>
<?php include('footer.php'); ?>