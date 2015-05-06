<?php

require('functions.php');

//Author: Daniel Kershner

$genre=$_GET["genre"];
$month=$_GET["month"];
$year=$_GET["year"];
$tag=$_GET["tag"];
$num_rows = 0;

$db = mysql_connect("studentdb.gl.umbc.edu","mduran2","mduran2");

if(!$db){
	exit("Error - could not connect to MySQL");
}

$er = mysql_select_db("mduran2");

if(!$er){
	exit("Error - could not select db_user database");
}

if($genre==""){
	$select_query = "SELECT comic_name, comic_id FROM db_comic WHERE MONTH(upload_date)='$month' 
					AND YEAR(upload_date)='$year' AND tag='$tag'";
}

if($month==""){
	$select_query = "SELECT comic_name, comic_id FROM db_comic WHERE YEAR(upload_date)='$year' 
					AND tag='$tag' AND genre='$genre'";
}

if($year==""){
	$select_query = "SELECT comic_name, comic_id FROM db_comic WHERE tag='$tag' AND genre='$genre' 
					AND MONTH(upload_date)='$month'";
}

if($tag==""){
	$select_query = "SELECT comic_name, comic_id FROM db_comic WHERE genre='$genre' 
					AND MONTH(upload_date)='$month' AND YEAR(upload_date)='$year'";
}

if($genre=="" && $month==""){
	$select_query = "SELECT comic_name, comic_id FROM db_comic WHERE MONTH(upload_date)='$month' AND genre='$genre'";
}

if($genre=="" && $year==""){
	$select_query = "SELECT comic_name, comic_id FROM db_comic WHERE MONTH(upload_date)='$month' 
					AND tag='$tag'";
}

if($genre=="" && $tag==""){
	$select_query = "SELECT comic_name, comic_id FROM db_comic WHERE MONTH(upload_date)='$month' 
					AND YEAR(upload_date)='$year'";
}

if($month=="" && $year==""){
	$select_query = "SELECT comic_name, comic_id FROM db_comic WHERE genre='$genre' AND tag='$tag'";
}

if($month=="" && $tag==""){
	$select_query = "SELECT comic_name, comic_id FROM db_comic WHERE genre='$genre' AND YEAR(upload_date)='$year'";
}

if($year=="" && $tag==""){
	$select_query = "SELECT comic_name, comic_id FROM db_comic WHERE YEAR(upload_date)='$year' 
					AND tag='$tag'";
}

if($genre=="" && $month=="" && $year==""){
	$select_query = "SELECT comic_name, comic_id FROM db_comic WHERE tag='$tag'";
}

if($genre=="" && $year=="" && $tag==""){
	$select_query = "SELECT comic_name, comic_id FROM db_comic WHERE MONTH(upload_date)='$month'";
}

if($genre=="" && $month=="" && $tag==""){
	$select_query = "SELECT comic_name, comic_id FROM db_comic WHERE YEAR(upload_date)='$year'";
}

if($month=="" && $year=="" && $tag==""){
	$select_query = "SELECT comic_name, comic_id FROM db_comic WHERE genre='$genre'";
}

if($genre!="" && $month!="" && $year!="" && $tag!=""){
	$select_query = "SELECT comic_name, comic_id FROM db_comic WHERE (genre='$genre' AND MONTH(upload_date)='$month' 
					AND YEAR(upload_date)='$year' AND tag='$tag')";
}
	
$result = mysql_query($select_query);

if(!mysql_query($select_query,$db)){
	die('Insert Row Failed!' . mysql_error());
}

if(mysql_num_rows($result)>0){
	while($row = mysql_fetch_array($result)){
		$num_rows++;
	}
	echo $num_rows;
}else{ 
	echo 0;
}

?>