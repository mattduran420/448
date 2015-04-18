<?php

//todo: add code to connect to database server
$db = mysql_connect("studentdb.gl.umbc.edu","mduran2","mduran2");

	if(!$db)
		exit("Error - could not connect to MySQL");

	
//todo: add code to select the database
#select database sampath
	$er = mysql_select_db("mduran2");
	if(!$er)
		exit("Error - could not select cars database");

?>