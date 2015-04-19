<?php

include('header.php');

$tag = $_POST['tag'];
$month = $_POST['month'];
$year = $_POST['year'];
$keyword = $_POST['keyword'];

?>

<h1>Search Results</h1>

<?php

print "Search results for comics";

if($tag!=""){
	print " with " . $tag . " tag";
}

if($month!=""){
	print " published in the month of " . $month;
}

if($year!=""){
	print " in the year " . $year;
}

if($keyword!=""){
	print " with keyword " . $keyword;
}

print ".";

include('footer.php');

?>