//debug line
console.log("kat.js included");

function checkRegistration() {
  var upass = document.getElementById("upass").value;

	var pattern1 = /[0-9a-zA-Z]{6,}/;
	var result = pattern1.test(upass);

		var uname = document.getElementById("uname").value;

	var pattern3 = /[0-9a-zA-Z_]{6,3}/;
	var result3 = pattern3.test(uname);

	var email = document.getElementById("email").value;

	var pattern2 = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
	var result2 = pattern2.test(email);
	
	if (result==false) 
	{

		alert("The password you entered is not in the correct form. Must be at least 6 characters long.");
	document.getElementById("upass").select();
    
		return false;
	}
	
	else if (result2==false) 
	{

		alert("The email address you entered is not in the correct form.");
	document.getElementById("email").select();
    
		return false;
	}
	
	else if (result3==false) 
	{

		alert("This username you entered is not in the correct form. Must be at least 6 characters long.");
	document.getElementById("uname").select();
    
		return false;
	}else{
		return true;
	}
	}
	
function changeText(){
document.body.style.color = "red";
}

function changeTextBack(){
document.body.style.color = "black";
}

function show_image(src, width, height, alt) {
    var img = document.createElement("img");
    img.src = src;
    img.width = width;
    img.height = height;
    img.alt = alt;
    
    document.body.appendChild(img);
}