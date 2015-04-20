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
	
	$query = mysql_query("select comic_name, genre, tag, upload_date,
	comic_status, rating_total, rating_count from db_comics", $db);	
						  
	while ($rows = mysql_fetch_assoc($query)) {
    echo images.php?id=$rows['comic_id']; 
    echo $rows['comic_name'];
    echo $rows['genre'];
    echo $rows['tag'];
    echo $rows['upload_date'];
    echo $rows['comic_status'];
    echo $rows['rating_total'];
    echo $rows['rating_count'];
	}
	?>

<?php include('footer.php'); ?>