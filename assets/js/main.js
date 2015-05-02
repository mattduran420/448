//debug line
console.log("main.js included");

function checkSearch(){
	console.log("checkSearch invoked");
	var genre = document.getElementByID("genre").value;
	var month = document.getElementByID("month").value;
	var year = document.getElementByID("year").value;
	var tag = document.getElementByID("tag").value;

	if(genre=="" || month=="" || year=="" || tag==""){
		alert("No search criteria entered. Please enter one or more search criteria!");
		return false;
	}else{
		return true;
	}
}