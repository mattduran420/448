<!-- Kat Pfeiffer -->

<?php
include('header.php');
?>

<head>
<title> Sign Up </title>
    
<!-- BEGIN ASSET INCLUDES -->
  <link rel="stylesheet" type="text/css" href="assets/styles/base.css">
  <script type="text/javascript" src="assets/js/jquery.js"></script>
<!-- END ASSET INCLUDES -->
  </head>
  <body>
  

<div class="main">
<div id="content">

    <p>
	<form name ="signup" action = "create_account.php">
	
	<label>
	  First Name: <input type = "text" name = "firstname" size = "30" maxlength="30" />
	</label>
	<br />
	<br />
	
	<label>
	  Last Name: <input type = "text" name = "lastname" size = "30" maxlength="30" />
	</label>
	<br />
	<br />
	
	<label>
	  Username: <input type = "text" name = "username" size = "30" maxlength = "30" />
	</label>
	<br />
	<br />
	
	<label>
	  Password: <input type = "text" name = "user_password" size = "30" maxlength = "30" />
	</label>
	<br />
	<br />
	
	<label>
	  Email: <input type = "text" name = "email" size = "30" maxlength="30" />
	</label>
	<br />
	<br />
	
	<input type = "submit" value="Submit" />
	</form>
	</p>

<?php
include('footer.php');
?>

</body>
</html>