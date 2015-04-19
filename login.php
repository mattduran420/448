<?php
include('header.php');
?>
    <p>
	<form name ="login" method="post" action = "auth.php">
	
	<label>
	  Username: <input type = "text" name = "username" size ="30" maxlength="30" 
	  			placeholder="example_name" required/>
	</label>
	<br />
	<br />
	
	<label>
	  Password: <input type = "password" name = "user_password" size ="30" maxlength="30" 
	  			placeholder="password" required/>
	</label>
	<br />
	<?php if(isset($_GET['error'])) { ?>
	<p><span style="color:red;">ERROR</span></p>
	<?php } ?>
	
	<input type = "submit" value="Login" />
	</form>
	</p>

<?php
include('footer.php');
?>