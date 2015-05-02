//debug line
console.log("main.js included");

function checkSearch(){
	console.log("checkSearch invoked");
	var genre = document.getElementById("genre").value;
	var month = document.getElementById("month").value;
	var year = document.getElementById("year").value;
	var tag = document.getElementById("tag").value;

	if(genre=="" && month=="" && year=="" && tag==""){
		alert("No search criteria entered. Please enter one or more search criteria and try again!");
		return false;
	}else{
		return true;
	}
}

function mouseOver(){
	document.body.style.background = "#FDF9C9";
}

function mouseOff(){
	document.body.style.background = "#ddd";
}