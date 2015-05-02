<?php
include('header.php');
?>

<!-- Kat Pfeiffer -->

    <p>
	<form name ="signup" method="post" action = "create_account.php" onsubmit="return checkRegistration();">
	
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
	  Password: <input type = "password" name = "user_password" id="upass" size = "30" maxlength = "30" />
	</label>
	<br />
	<br />
	
	<label>
	  Email: <input type = "text" name = "email" id="email" size = "30" maxlength="30" />
	</label>
	<br />
	<br />
	
	<input type = "submit" value="Submit" />
	</form>
	</p>

<?php
include('footer.php');
?>