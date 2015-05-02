//debug line
console.log("kat.js included");

function checkRegistration() {
  var upass = document.getElementById("upass").value;

	var pattern1 = /[0-9a-zA-Z]{6,}/;
	var result = pattern1.test(upass);
	
	if (result==false) 
	{

		alert("The password you entered is not in the correct form. Must be at least 6 characters long.");
	document.getElementById("upass").select();
    
		return false;
	}
	
  var email = document.getElementById("email").value;

	var pattern2 = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
	var result2 = pattern2.test(email);
	
	if (result2==false) 
	{

		alert("The email address you entered is not in the correct form.");
	document.getElementById("email").select();
    
		return false;
	}
	
	var uname = document.getElementById("uname").value;

	var pattern3 = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
	var result3 = pattern3.test(uname);
	
	if (result3==false) 
	{

		alert("This username is already taken. Please choose a different one.");
	document.getElementById("uname").select();
    
		return false;
	}
	}
	
function changeText(){
document.body.style.color = "red";
}

function displayMessage(){
document.print("enter your username");
}