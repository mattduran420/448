<?php
include('header.php');
?>

<!-- Kat Pfeiffer -->

    <p>
	<form name ="signup" id="signup" method="post" onsubmit="event.preventDefault(); return checkRegistration();">
	
	<label>
	  First Name: <input type = "text" name = "firstname" size = "30" maxlength="30" 
	  onmouseover="changeText()" onmouseout="changeTextBack()"/>
	</label>
	<br />
	<br />
	
	<label>
	  Last Name: <input type = "text" name = "lastname" size = "30" maxlength="30"
	  onmouseover="changeText()" onmouseout="changeTextBack()" />
	</label>
	<br />
	<br />
	
	<label>
	  Username: <input type = "text" name = "username" id = "uname" size = "30" maxlength = "30" 
	  			onmouseover="changeText()" onmouseout="changeTextBack()"/>
	</label>
	<br />
	<br />
	
	<label>
	  Password: <input type = "password" name = "user_password" id="upass" size = "30" maxlength = "30"
	  onmouseover="changeText()" onmouseout="changeTextBack()" />
	</label>
	<br />
	<br />
	
	<label>
	  Email: <input type = "text" name = "email" id="email" size = "30" maxlength="30" 
	  onmouseover="changeText()" onmouseout="changeTextBack()"/>
	</label>
	<br />
	<br />
	
	<input type = "submit" value="Submit" onclick="createAccount()"/>
	</form>
	</p>

<script>
function checkName(){
$.ajax({
  method: "POST",
  url: "create_account.php",
  data: {username: "username"}
})
  .done(function( msg ) {
    if (msg==0)
    {alert("username already taken");}
    else
    {alert("username available");}
  });
}

function createAccount(){
var data =  $("#signup").serializeArray();
console.log(data);
$.ajax({
  method: "POST",
  url: "create_account.php",
  data: $("#signup").serialize()
})
  .done(function( msg ) {
  	if(msg==2){
  	alert("Account Created, Redirecting to Login");
  	window.location.replace("login.php");
  	}
  	else{alert("Username Already Taken");} 
  	
  });
}
</script>
  
<?php
include('footer.php');
?>