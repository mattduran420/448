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
			<?php
				$querystring  = "select * from db_note where comic_id = " . $_GET['id'] . " ORDER BY note_time DESC";
				$results = mysql_query($querystring, $db);
				if(!$results){
					die("error:" . mysql_error());
				}
				else{
					$i = 0;
					while($row = mysql_fetch_array($results)){ ?>
					<div class="comic-note" style="margin-top:<?php echo "88"; ?>px;margin-left:<?php echo "55"; ?>px;">
						<a class="note-link" href="javascript:void(0)" onclick="toggleNote('note-<?php echo $row['note_id']; ?>');">X</a>
						<div class="note-body" id="note-<?php echo $row['note_id']; ?>">
							<p><?php echo '<p>Comment by <a href="#">User</a> on ' .  $row['note_time'] . "</p>"; ?></p>
							<p><?php echo "<p>" . $row['noteContent'] . "</p>"; ?></p>
						</div>
					</div>
				<?php
					$i++;
					}
				}
			?>
			<img id="comic" src="images.php?id=<?php echo $_GET['id']; ?>" class="comic-spotlight">
		</div>
	</div>
</div>

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

$(document).ready(function() {
	$('img').click(function(e) {
		console.log("test");
		var offset = $(this).offset();
		var randID = Math.floor((Math.random() * 1000) + 1);
		var container = "<div class=\"comic-note\" style=\"margin-top:" + (e.clientY - offset.top) + "px;margin-left:" + (e.clientX - offset.left) + "px;\">";
		container += "<a class=\"note-link\" href=\"javascript:void(0)\" onclick=\"toggleNote('note-" + randID + "');\">X</a>";
		container += "<div class=\"note-body\" id=\"note-" + randID + "\"><p>Leave a Note</p><textarea id='" + randID + "' rows=\"4\" cols=\"50\"></textarea>";
		container += "<p><input type=\"submit\" value=\"add\" onclick=\"ajaxNote(" + (e.clientY - offset.top)+","+(e.clientX - offset.left)+","+randID+")\">";
		container += "</p></div></div>";
		$('#note-container').append(container);
		$('#note-'+randID).toggle();
	});
});


var date = new Date();

function ajaxNote(x,y,id){
	if($("#" + id).val()){
		console.log("body!!!");
		$.ajax({
			method: "POST",
			url: "process_note.php",
			data: {note: $(('#'+id)).val(), x:x, y:y,comicID:12}
		})
		.success(function( msg ) {
			console.log(msg);
			appendNote($(('#'+id)).val());
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

function appendNote(note){
	console.log("append note called");
	var html = '<div class="comment-body">';
	html += "<p>" + note + "</p>";
	html += "<p>" + date.toISOString().slice(0,10).replace(/-/g,"-") + "</p>";
	html += "</div>";
	$(html).insertBefore('.comment-body');
	return;
}


function toggleNote(noteBodyID){
		$("#" + noteBodyID).toggle();
	}
</script>
<?php include('footer.php'); ?>