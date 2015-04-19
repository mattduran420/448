<?php

include('header.php');

$genre = $_POST['genre'];
$month = $_POST['month'];
$year = $_POST['year'];
$tag = $_POST['tag'];

?>

<h1>Search Results</h1>

<?php

print "Search results for comics";

if($genre!=""){
	print " with " . $genre . " genre";
}

if($month!=""){
	print " published in the month of " . $month;
}

if($year!=""){
	print " in the year " . $year;
}

if($tag!=""){
	print " with tag " . $tag;
}

print ".";

$db = mysql_connect("studentdb.gl.umbc.edu","katp1","katp1");

if(!$db){
	exit("Error - could not connect to MySQL");
}

$er = mysql_select_db("katp1");

if(!$er){
	exit("Error - could not select db_user database");
}
	
$result = mysql_query("SELECT comic_name FROM db_comic WHERE genre='$genre' AND YEAR(upload_date)='$year' AND tag='$tag'", $db);

while($row = mysql_fetch_array($result)){
   	print $row['comic_name'];
   	print 'YOOOOOO';
}

include('footer.php');

?>