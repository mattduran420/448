<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">

<!-- Kat Pfeiffer --> 

<?php
include('header.php');
?>

<head>
<title> Home </title>
    
<!-- BEGIN ASSET INCLUDES -->
  <link rel="stylesheet" type="text/css" href="assets/styles/base.css">
  <script type="text/javascript" src="assets/js/jquery.js"></script>
<!-- END ASSET INCLUDES -->
  </head>
  <body>
  

<div class="main">
<div id="content">

<?php 
	$firstname = mysql_real_escape_string(htmlspecialchars($_POST['firstname']));
	$lastname = mysql_real_escape_string(htmlspecialchars($_POST['lastname']));
	$username = mysql_real_escape_string(htmlspecialchars($_POST['username']));
	$user_password = mysql_real_escape_string(htmlspecialchars($_POST['user_password']));
	$email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
	
	$db = mysql_connect("studentdb.gl.umbc.edu","katp1","katp1");

	if(!$db)
	{
		exit("Error - could not connect to MySQL");
	}
	
	$er = mysql_select_db("katp1");
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

</body>
</html>