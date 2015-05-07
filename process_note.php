<?php
	session_start();
	//Matt Duran
	$date = date('Y-m-d');

	$db = mysql_connect("studentdb.gl.umbc.edu","mduran2","mduran2");
		if(!$db) exit("Error - could not connect to MySQL");

	$er = mysql_select_db("mduran2");
		if(!$er) exit("Error - could not select db_user database");
	
	$store_note = "INSERT INTO db_note(noteContent, note_time, xposition, yposition, user_id, comic_id) 
				VALUES('".$_POST['note']."','$date',".$_POST['x'].",".$_POST['y'].",".$_SESSION['userID'].",".$_POST['comic_id'].")";
	var_dump($store_note);
	$result = mysql_query($store_note);
	if(!$result){
		die("error:" . mysql_error());
	}

	header("location: edit_draft.php?id=".$_POST['comic_id']);
?>