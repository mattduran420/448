<?php include('header.php'); ?>
<?php //include('sidebar.php'); ?>

<!-- Kat Pfeiffer -->
<?php	
	$db = mysql_connect("studentdb.gl.umbc.edu","mduran2","mduran2");

	if(!$db)
	{
		exit("Error - could not connect to MySQL");
	}
	
	$er = mysql_select_db("mduran2");
	if(!$er)
	{
		exit("Error - could not select database");
	}
	
	$query = mysql_query("select * from db_comic limit 0,5", $db);	
	if(!$query){
		die(mysql_error());
	}
	while ($rows = mysql_fetch_assoc($query)) {?>
    <?php echo '<img src="images.php?id='.$rows['comic_id'].'"><br/>'; ?>
    <h3><?php echo $rows['comic_name']; ?></h3>
    <p> Genre:&nbsp; <?php echo $rows['genre'];?>
    Tag:&nbsp; <?php echo $rows['tag'];?>
    Date Uploaded:&nbsp; <?php echo $rows['upload_date'];?>
    Status:&nbsp; <?php echo $rows['comic_status'];?>
    Rating Total:&nbsp; <?php echo $rows['rating_total'];?>
    Rating Count:&nbsp; <?php echo $rows['rating_count'];?></p>
    <?php echo "<br/>"; ?>
	<?php } ?>

<?php include('footer.php'); ?>