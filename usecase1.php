<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">

<!-- HEADER -->
  <head>
    <title> Create Account 
    </title>
    <link rel="stylesheet" type="text/css" href="assets/styles/base.css" />
  </head>
<!-- END HEADER -->

<!-- SIDEBAR -->
	<body>
		<div>
		</div>

		<div>
		</div>
<!-- END SIDEBAR -->
		
<!-- FOOTER -->
		<div>
		</div>
<!-- END FOOTER -->

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


</body>
</html>