<!-- Kat Pfeiffer --> 

<?php
include('header.php');
?>
<html>
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
	$username = mysql_real_escape_string(htmlspecialchars($_POST['username']));
	$user_password = mysql_real_escape_string(htmlspecialchars($_POST['user_password']));
	
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
	
	$query = mysql_query("select * from db_user where user_password='$user_password' 
						  AND username='$username'", $db);	
						  
	$rows = mysql_num_rows($query);
	
	if ($rows == 1) 
	{
		$_SESSION['login']=$username; 
		header("location: home.php"); 
	} else 
		{
		$error = "Sorry - Your username or password is invalid";
		}
	
	mysql_close($db); 
?>

<?php
include('footer.php');
?>

</body>
</html>