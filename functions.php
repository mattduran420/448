<?
require('library/json.php');
//function to connect to DB
//returns db object
function connectToDB($account = "mduran2"){
	$db = mysql_connect("studentdb.gl.umbc.edu",$account,$account);

	if(!$db)
	{
		exit("Error - could not connect to MySQL");
	}
	
	$er = mysql_select_db($account);
	if(!$er)
	{
		exit("Error - could not select database");
	}

	return $db;
}

//function to return the root path of the website
//use when wanting to link to home
function getRootPath(){
	return "root path";
}

//wrapper around json encode so that peeps dont have to use
//the json object
function json_encode($value){
	$json = new Services_JSON();
	return $json->encode($value);
}

//wrapper around json decode so that peeps dont have to use
//the json object
function json_decode($value){
	$json = new Services_JSON();
	return $json->decode($value);
}

?>