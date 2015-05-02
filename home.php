<?php include('header.php'); ?>
<?php //include('sidebar.php'); ?>

<!-- Kat Pfeiffer -->
<?php	
	$db = connectToDB();
	
	$query = mysql_query("select * from db_comic limit 0,5", $db);	
	if(!$query){
		die(mysql_error());
	}
	while ($rows = mysql_fetch_assoc($query)) {?>
	<div class="">
	    <?php echo '<img src="images.php?id='.$rows['comic_id'].'"><br/>'; ?>
	    <h3><?php echo $rows['comic_name']; ?></h3>
	    <p> Genre:&nbsp; <?php echo $rows['genre'];?>
	    Tag:&nbsp; <?php echo $rows['tag'];?>
	    Date Uploaded:&nbsp; <?php echo $rows['upload_date'];?>
	    Status:&nbsp; <?php echo $rows['comic_status'];?>
	    Rating Total:&nbsp; <?php echo $rows['rating_total'];?>
	    Rating Count:&nbsp; <?php echo $rows['rating_count'];?></p>
	    <?php echo "<br/>"; ?>
    </div>
	<?php } ?>

<?php include('footer.php'); ?>