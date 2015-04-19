<?php
include('header.php');
?>  

<!-- Kat Pfeiffer --> 

<?php 
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$user_password = $_POST['user_password'];
	$email = $_POST['email'];
	
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
	
	$sql_insert = "INSERT INTO db_user(firstname, lastname, email, username, user_password) 
					VALUES ('$firstname', '$lastname', '$email', '$username', '$user_password')";
	mysql_query($sql_insert);	
?>

<?php
include('footer.php');
?>