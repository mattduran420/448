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