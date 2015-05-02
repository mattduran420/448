<?	
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


?>