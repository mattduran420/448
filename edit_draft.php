<?php include('header.php'); ?>
<?php

$db = mysql_connect("studentdb.gl.umbc.edu","mduran2","mduran2");
if(!$db) exit("Error - could not connect to MySQL");

$er = mysql_select_db("mduran2");
if(!$er) exit("Error - could not select db_user database");
?>
<!-- EDIT HERE -->
<div align="center">
	<h3>Use Case 2</h3>
	<h2>Drafts</h2>
	<div id="comic-playground">
		<!-- BEGIN SAMPLE COMIC NOTES -->
		<!-- COMIC NOTES WILL BE INSERTED DYNAMICALLY -->
		<div id="note-container">
			<!-- FOR NOTE IN NOTES -->
			<div class="comic-note" style="margin-top:88px;margin-left:55px;">
				<a class="note-link" href="javascript:void(0)" onclick="toggleNote('note-1');">X</a>
				<div class="note-body" id="note-1">
					<p>Note added by <a href="#">Jake</a><br/>
					1:58 AM 3/17/2015
					</p>
					<p>I have no friends!</p>
				</div>
			</div>
			<!-- END FOOR LOOP -->
			<!-- END SAMPLE COMIC NOTES -->
			<img id="comic" src="images.php?id=<?php echo $_GET['id']; ?>" class="comic-spotlight">
		</div>
	</div>
</div>

<!-- BEGIN LISTED NOTES -->
<div class="something">
	<!-- FOR NOTE IN NOTES -->
	<div class="listed-comic-note">
		<div class="comment-body">
			<p>Note added by <a href="#">Jake</a><br/>
			1:58 AM 3/17/2015
			</p>
			<p>I have no friends!</p>
		</div>
	</div>
	<!-- END FOOR LOOP -->
</div>
<!-- END LISTED NOTES -->

<?php include('footer.php'); ?>