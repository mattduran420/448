<?php include('header.php'); ?>
<?php //include('sidebar.php'); ?>

<!-- Kat Pfeiffer -->
<?php	
	$db = connectToDB();
	$query = mysql_query("select * from db_comic where comic_status = 2 order by upload_date desc limit 0,5", $db);	
	if(!$query){
		die(mysql_error());
	} ?>
	<div align="center">
	<h2>Most Recent Comics</h2>
	<?php while ($rows = mysql_fetch_assoc($query)) {?>
	<div class="comicContainer">
		<a href="comment_comic.php?comic_id=<?php echo $rows['comic_id']; ?>" style="text-decoration:none;">
	    <?php echo '<img src="images.php?id='.$rows['comic_id'].'"><br/>'; ?>
	    <h3><?php echo $rows['comic_name']; ?></h3>
	    </a>
		<table>
			<tr><td><b>Genre:</b></td><td><?php echo $rows['genre'];?></td></tr>
			<tr><td><b>Tag:</b></td><td><?php echo $rows['tag'];?></td></tr>
			<tr><td><b>Date Uploaded:</b></td><td><?php echo $rows['upload_date'];?></td></tr>
		</table>
    </div>
	<?php } ?>
	</div>
<?php include('footer.php'); ?>