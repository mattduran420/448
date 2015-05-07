//debug line
console.log("main.js included");


//Author: Daniel Kershner
function checkSearch(){
	console.log("checkSearch invoked");
	var genre = document.getElementById("genre").value;
	var month = document.getElementById("month").value;
	var year = document.getElementById("year").value;
	var tag = document.getElementById("tag").value;

	if(genre=="" && month=="" && year=="" && tag==""){
		alert("No search criteria entered. Please enter one or more search criteria and try again!");
		document.body.style.color = "red";
		return false;
	}else{
		document.body.style.color = "black";
		return true;
	}
}

function mouseOver(){
	document.body.style.background = "#FDF9C9";
}

function mouseOff(){
	document.body.style.background = "#ddd";
}

function resultTotal(){
	$genre = $("genre").value;
	$month = $("month").value;
	$year = $("year").value;
	$tag = $("tag").value;
	new Ajax.Request( "count_search_results.php", 
	{ 
		method: "get", 
		parameters: {genre:$genre, month:$month, year:$year, tag:$tag},
		onSuccess: displayResult
	} );
}

function displayResult(ajax){
	$("total").value=ajax.responseText;
}