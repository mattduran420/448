<?php
$comic_table = mysql_connect("studentdb.gl.umbc.edu", "mduran2", "mduran2");
	if(!$comic_table){
		exit("Error - could not connect to Comic Database");
	}
	
	//Select the database
	$select_table = mysql_select_db("mduran2");
		if(!$select_table){
			exit("Error - Could not access to Comic Table");
	}
?>