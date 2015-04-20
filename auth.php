<?php
	session_start();

	/* Kat Pfeiffer */
	$username = $_POST['username'];
	$user_password = $_POST['user_password'];
	
	$db = mysql_connect("studentdb.gl.umbc.edu","mduran2","mduran2");

	if(!$db)
	{
		exit("Error - could not connect to MySQL");
	}
	
	$er = mysql_select_db("mduran2");
	if(!$er)
	{
		exit("Error - could not select db_user database");
	}
	
	$query = mysql_query("select * from db_user where user_password='$user_password' 
						  AND username='$username'", $db);	
						  
	$rows = mysql_num_rows($query);
	
	if ($rows == 1) 
	{
		$_SESSION['login']=true;
		$_SESSION['userID'] = 1;
		$_SESSION['username'] = "sample username";
		header("location: home.php"); 
	} else 
	{
	header("location: login.php?error=1");
	}
	
	mysql_close($db); 
?>