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
	<?php
	$upload_path = substr(getcwd(), 0, strpos(getcwd(),'www')) . "php-files/";
	?>
	<img src="">

<?php
///////////////////
// UPLOAD FILE HANDLER
///////////////////
if($_FILES['photo']['name'])
{
	if(!$_FILES['photo']['error'])
	{
		//get file name from form data
		$new_file_name = strtolower($_FILES['photo']['name']);
		if(!$_FILES['photo']['size'] > 4096000){
			//move file from temp directory to uploads directory in php-files
			move_uploaded_file($_FILES['photo']['tmp_name'], $upload_path.$new_file_name);
			//read file and convert to binary
			$file = fopen($upload_path.$new_file_name, "rb") or die ("Error - could not open file");
			$payload = fread($file, filesize($upload_path.$new_file_name));
			//escape binary data
			$payload = addslashes($payload);
			fclose($file);
			//INSERT IMAGE AS BINARY BLOB INTO DATABASE

			/* THIS LINE NEEDS HEAVY MODIFACTION TO ACCEPT POST DATA */
			$query = "insert into db_comic values(1,'test_name','sports_genre','feminism_tag','2015-04-15','$payload',1,12,3)";
			
			$result = mysql_query($query,$db);
		}
	}
}
?>

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
			<!-- img src $path + $imageName class="comic-spotlight"> -->
			<img id="comic" src="assets/img/sample_comic.png" class="comic-spotlight">
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