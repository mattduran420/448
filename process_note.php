<?php
	//Matt Duran
	$user_id = 1;
	$date = '2015-04-21';

	$db = mysql_connect("studentdb.gl.umbc.edu","mduran2","mduran2");
		if(!$db) exit("Error - could not connect to MySQL");

	$er = mysql_select_db("mduran2");
		if(!$er) exit("Error - could not select db_user database");
	
	$store_note = "INSERT INTO db_note(noteContent, note_time, xposition, yposition, user_id, comic_id) 
				VALUES('".$_POST['note']."','$date',5,5,1,".$_POST['comic_id'].")";
	$result = mysql_query($store_note);
	if(!$result){
		die("error:" . mysql_error());
	}

	header("location: edit_draft.php?id=".$_POST['comic_id']);
?>