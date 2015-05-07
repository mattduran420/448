<?php
/*
THIS FILE IS EXCLUSIVELY USED TO RETRIEVE BLOB IMAGES
FROM THE DATABASE AND OUTPUT THEM TO THE BROWSER
*/
//set image headers
header("Content-Type: image/png");
header("Content-Length: " . filesize($name));

$db = mysql_connect("studentdb.gl.umbc.edu","mduran2","mduran2");
if(!$db) exit("Error - could not connect to MySQL");

$er = mysql_select_db("mduran2");
if(!$er) exit("Error - could not select db_user database");

//retrieve binary image text from database
$query = "select image_payload from db_comic where comic_id = ".$_GET['id'].";";
$query = mysql_query($query, $db);
$row = mysql_fetch_row($query);
//print binary image text
echo $row[0];
mysql_close($db);
exit();
?>