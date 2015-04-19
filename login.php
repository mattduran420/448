<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">

<!-- Kat Pfeiffer -->

<?php
include('header.php');
?>

<head>
<title> Login </title>
    
<!-- BEGIN ASSET INCLUDES -->
  <link rel="stylesheet" type="text/css" href="assets/styles/base.css">
  <script type="text/javascript" src="assets/js/jquery.js"></script>
<!-- END ASSET INCLUDES -->
  </head>
  <body>
  

<div class="main">
<div id="content">

    <p>
	<form name ="login" method="get" action = "auth.php">
	
	<label>
	  Username: <input type = "text" name = "username" size ="30" maxlength="30" 
	  			placeholder="example_name" required/>
	</label>
	<br />
	<br />
	
	<label>
	  Password: <input type = "text" name = "user_password" size ="30" maxlength="30" 
	  			placeholder="password" required/>
	</label>
	<br />
	<br />
	
	<input type = "submit" value="Login" />
	</form>
	</p>

<?php
include('footer.php');
?>

</body>
</html>