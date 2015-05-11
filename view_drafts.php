<?php
include("header.php");
$db = mysql_connect("studentdb.gl.umbc.edu","mduran2","mduran2");
if(!$db) exit("Error - could not connect to MySQL");

$er = mysql_select_db("mduran2");
if(!$er) exit("Error - could not select db_user database");

$querystring  = "SELECT comic_id,comic_name, genre, tag, upload_date FROM db_comic
	 where user_id = " . $_SESSION['userID'] . " and comic_status = 1 limit 0,5";
$results = mysql_query($querystring, $db);
if(!$results){
	die("error:" . mysql_error());
}
else{
	while($row = mysql_fetch_array($results)){
		echo '<a href=edit_draft.php?id='.$row['comic_id'].'>';
		echo '<img src="images.php?id='.$row['comic_id'].'">';
		echo '</a><br/>';
		echo $row['comic_name'] . " ";
		echo $row['genre'] . " ";
		echo $row['tag'] . " ";
		echo $row['upload_date'] . " ";
		echo "<br/>" . " ";
	}
}
include("footer.php");
?>