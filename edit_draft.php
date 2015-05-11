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
				$querystring  = "select db_note.*,db_user.username from db_note,db_user 
		where db_note.user_id = db_user.user_id and comic_id = " . $_GET['id'] . " ORDER BY note_time DESC";
				$results = mysql_query($querystring, $db);
				if(!$results){
					die("error:" . mysql_error());
				}
				else{
					$i = 0;
					while($row = mysql_fetch_array($results)){ ?>
					<div class="comic-note" style="margin-top:<?php echo $row['xposition']; ?>px;margin-left:<?php echo $row['yposition']; ?>px;">
						<a class="note-link" href="javascript:void(0)" onclick="toggleNote('note-<?php echo $row['note_id']; ?>','hide');">X</a>
						<div class="note-body" id="note-<?php echo $row['note_id']; ?>">
							<p><?php echo '<p>Comment by <a href="#">'.$row["username"].'</a> on ' .  $row['note_time'] . "</p>"; ?></p>
							<p><?php echo "<p>" . $row['noteContent'] . "</p>"; ?></p>
						</div>
					</div>
				<?php
					$i++;
					}
				}
			?>
			<img id="comic" src="images.php?id=<?php echo $_GET['id']; ?>" class="comic-spotlight" style="float:left;">
			<div class="spacer" style="clear:both;"></div>
		</div>
	</div>
</div>
<br/>
<!-- end example -->
<!-- BEGIN LISTED NOTES -->
<div class="something" style="background-color:#555;color:#fff;">
<?php
				$querystring  = "select db_note.*,db_user.username from db_note,db_user 
		where db_note.user_id = db_user.user_id and comic_id = " . $_GET['id'] . " ORDER BY note_id DESC";
				$results = mysql_query($querystring, $db);
	if(!$results){
		die("error:" . mysql_error());
	}
	else{
		$i = 0;
		while($row = mysql_fetch_array($results)){ ?>
		<div class="comment-body">
			<p><?php echo '<p>Comment by <a href="#">' . $row["username"] . '</a> on ' .  $row['note_time'] . "</p>"; ?></p>
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
var currentID = null;
$(document).ready(function() {
	$('img').click(function(e) {
		if(currentID){
			toggleNote("note-" + currentID,'delete');
			currentID = null;
		}
		var offset = $('#note-container').offset();
		var randID = Math.floor((Math.random() * 1000) + 1);
		currentID = randID;
		var container = "<div class=\"comic-note\" id=\"note-" + randID + "-parent\" style=\"margin-top:" + (e.pageY - offset.top) + "px;margin-left:" + (e.clientX - offset.left) + "px;\">";
		container += "<a class=\"note-link\" href=\"javascript:void(0)\" onclick=\"toggleNote('note-" + randID + "','delete');\">X</a>";
		container += "<div class=\"note-body\" id=\"note-" + randID + "\"><p>Leave a Note</p><textarea id='" + randID + "' rows=\"4\" cols=\"50\"></textarea>";
		container += "<p><input type=\"submit\" value=\"add\" onclick=\"ajaxNote(" + (e.pageY - offset.top)+","+(e.pageX - offset.left)+","+randID+")\">";
		container += "</p></div></div>";
		$('#note-container').prepend(container);
		$('#note-'+randID).toggle();
	});
});


var date = new Date();

function ajaxNote(x,y,id){
	if($("#" + id).val()){
		$.ajax({
			method: "POST",
			url: "process_note.php",
			data: {note: $(('#'+id)).val(), x:x, y:y,comic_id:<?php echo $_GET['id']; ?>}
		})
		.success(function( msg ) {
			var val = $(('#'+id)).val();
			toggleNote('note-' + id,'delete');
			appendNote(val);
			createNote(x,y,id,val);
			toggleNote(id,'hide');
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

function createNote(x,y,id,note){
	var html  = '<div class="comic-note" style="margin-top:' + x + 'px;margin-left:' + y + 'px;">';
		html += "<a class='note-link' href='javascript:void(0)' onclick=\"toggleNote('" + id + "','hide');\">X</a>";
		html += '<div class="note-body" id="' + id + '">';
		html += '<p>Comment by <a href="#"><?php echo $_SESSION["username"]; ?></a> on '+ date.toISOString().slice(0,10).replace(/-/g,"-") + '</p>';
		html += '<p>' + note + '</p>';
		html += '</div>';
		html += '</div>';
	$('#note-container').prepend(html);
	return;
}

function appendNote(note){
	var html = '<div class="comment-body">';
	html += '<p>Comment by <a href="#"><?php echo $_SESSION["username"] ?></a> on ' + date.toISOString().slice(0,10).replace(/-/g,"-") + "</p>";
	html += "<p>" + note + "</p>";
	html += "</div>";
	$('.something').prepend(html);
	return;
}


function toggleNote(noteBodyID,action){
	if(action == 'hide'){
		if($("#" + noteBodyID).css('z-index') == '0'){
			$("#" + noteBodyID).css('z-index','1');
		}
		else if($("#" + noteBodyID).css('z-index') == '1'){
			$("#" + noteBodyID).css('z-index','0');
		}
		else{
			$("#" + noteBodyID).css('z-index','1');
		}

		$("#" + noteBodyID).toggle();
	}
	else {
		$("#" + noteBodyID + "-parent").remove();
	}
	return;
}
</script>
<?php include('footer.php'); ?>