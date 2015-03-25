<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">

<head>
<title> Account Creation </title>
    
<!-- BEGIN ASSET INCLUDES -->
  <link rel="stylesheet" type="text/css" href="assets/styles/base.css">
  <script type="text/javascript" src="assets/js/jquery.js"></script>
<!-- END ASSET INCLUDES -->
  </head>
  <body>
  
<!-- HEADER -->
	<div id="header">
		<div id="header-nav" class="pull-right">
			<ul>
				<li><a href="usecase1.html">Use Case 1</a></li>
				<li><a href="usecase2.html">Use Case 2</a></li>
				<li><a href="usecase3.html">Use Case 3</a></li>
				<li><a href="usecase4.html">Use Case 4</a></li>
			</ul>
		</div>
		<div id="logo">
		<a href="#">
			<img src="assets/img/logo.png" height="150px" alt="Musicians Ink logo">
		</a>
		</div>

	</div>
<!-- END HEADER -->

<div class="main">
<div id="content">

<h1> Account Creation </h1>
<?php 
	$name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
	$email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
	$username = mysql_real_escape_string(htmlspecialchars($_POST['username']));
	$password = mysql_real_escape_string(htmlspecialchars($_POST['password']));
	
	$db = mysql_connect("studentdb.gl.umbc.edu","katp1","katp1");

	if(!$db)
	{
		exit("Error - could not connect to MySQL");
	}
	
	$er = mysql_select_db("katp1");
	if(!$er)
	{
		exit("Error - could not select user database");
	}
	
	$sql_insert = "INSERT INTO user (name, email, username, password) VALUES ('$name', '$email', '$username', '$password')";
	mysql_query($sql_insert);	
?>
<!-- FOOTER -->
	<div id="footer">
		<div class="inner-footer">
			<p>FOOTER</p>
		</div>
	</div>
	
<!-- END FOOTER -->
	</body>

</body>
</html>