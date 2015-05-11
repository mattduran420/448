<?php
/*
THIS FILE IS EXCLUSIVELY USED TO RETRIEVE BLOB IMAGES
FROM THE DATABASE AND OUTPUT THEM TO THE BROWSER
*/
//set image headers
ob_end_clean();
header("Content-Type: image/png");
header("Content-Length: " . filesize($name));
ignore_user_abort(true); // just to be safe
ob_start();
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
$size = ob_get_length();
header("Content-Length: $size");
ob_end_flush(); // Strange behaviour, will not work
flush(); // Unless both are called !
mysql_close($db);
exit();
?>