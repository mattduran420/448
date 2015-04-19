<?php include('header.php'); ?>
<?php
$db = mysql_connect("studentdb.gl.umbc.edu","katp1","katp1");
if(!$db)
{
	exit("Error - could not connect to MySQL");
}

$er = mysql_select_db("katp1");
if(!$er)
{
	exit("Error - could not select db_user database");
}

$query = mysql_query("insert into db_comic values(2,'test','sports','feminism','2015-04-15','1.png',1,12,3)",$db);

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
//if they DID upload a file...
if($_FILES['photo']['name'])
{
	if(!$_FILES['photo']['error'])
	{
		$new_file_name = strtolower($_FILES['photo']['name']);
		if($_FILES['photo']['size'] > 4096000)
		{
			$valid_file = false;
		}
		else{
			var_dump($upload_path.$new_file_name);
			echo "<br/>";
			var_dump(getcwd().'/assets/uploads/'.$new_file_name);
			move_uploaded_file($_FILES['photo']['tmp_name'], $upload_path.$new_file_name);
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