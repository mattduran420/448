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
	print " published in the " . $month . "th month";
}

if($year!=""){
	print " in the year " . $year;
}

if($tag!=""){
	print " with tag " . $tag;
}

print ".";
print "<br />";

$db = mysql_connect("studentdb.gl.umbc.edu","katp1","katp1");

if(!$db){
	exit("Error - could not connect to MySQL");
}

$er = mysql_select_db("katp1");

if(!$er){
	exit("Error - could not select db_user database");
}

$select_query = "SELECT comic_name, img_url FROM db_comic WHERE (genre='$genre' AND MONTH(upload_date)='$month' 
				AND YEAR(upload_date)='$year' AND tag='$tag') OR (genre='$genre' AND MONTH(upload_date)='$month' 
				AND YEAR(upload_date)='$year') OR (MONTH(upload_date)='$month' AND YEAR(upload_date)='$year' 
				AND tag='$tag') OR (YEAR(upload_date)='$year' AND tag='$tag' AND genre='$genre') OR (tag='$tag' 
				AND genre='$genre' AND MONTH(upload_date)='$month') OR (genre='$genre' AND MONTH(upload_date)='$month')
				OR (genre='$genre' AND YEAR(upload_date)='$year') OR (genre='$genre' AND tag='$tag') 
				OR (MONTH(upload_date)='$month' AND YEAR(upload_date)='$year') OR (MONTH(upload_date)='$month' 
				AND tag='$tag') OR (YEAR(upload_date)='$year' AND tag='$tag') OR genre='$genre' 
				OR MONTH(upload_date)='$month' OR YEAR(upload_date)='$year' OR tag='$tag'";
	
$result = mysql_query($select_query);

while($row = mysql_fetch_array($result)){
   	print ("$row[comic_name]");
   	print ("<br />");
   	$comic_file = $row['img_url'];
   	$comic_file_path = "/assets/uploads/" . $comic_file;
   	?> <img src =<?php echo $comic_file_path ?>/>
   	<?php
   	print("<br />");
}

include('footer.php');

?>