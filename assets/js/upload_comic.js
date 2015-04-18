var xmlHttp = createXmlHttpRequestObject();

function createXmlHttpRequestObject(){
	var xmlHttp;

	if(window.ActiveXObject){
		try{
			xmlHttp = new ActiveXObject("Microsoft.xmlHttp");
		} catch (e){
			xmlHttp = false;
		}

	}else {
		try{
			xmlHttp = new XMLHttpRequest();
		} catch (e){
			xmlHttp = false;
		}

	}
	if(!xmlHttp){
		alert("Cannot create the object");
	}else{
		return xmlHttp;
	}
}

function process () {
	if(xmlHttp.readyState == 0 || xmlHttp.readyState == 4){
		comic = encodeURIComponent(document.getElementById("comic").value);
		xmlHttp.open("GET", "upload_comic.php?comic ="+ comic, true);
		xml.onreadystatechange = handleServerResponse;
		xmlHttp.send(null);
	}else{
		setTimeout('process()', 1000);

	}
}

function handleServerResponse(){
	if(xmlHttp.readyState == 4){
		if(xmlHttp.readyState == 200){
			xmlResposne = xmlHttp.responseXML;
			xmlDocumentElement = xmlResposne.documentElement;
			message = xmlDocumentElement.firstChild.data;
			document.getElementById("upload_comic").innerHTML = '<span style = "color:blue"'
			+ message + '</span>';
			setTimeout('process()', 1000);
		}else{
			alert("Something went wroing");
		}
	}

}

$(function() {
	$('#comic').mouseover(function() {
		$(this).css('color', 'blue');
	});

});

$(function() {
	$(':button').click(function() {
		$('#comment-box').toggle();
	});
});