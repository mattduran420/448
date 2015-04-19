<?php
header("Content-Type: image/png");
header("Content-Length: " . filesize($name));
$name = $upload_path = substr(getcwd(), 0, strpos(getcwd(),'www')) . "php-files/";
//$fp = fopen($name.$_GET['image'], 'rb');
if(file_exists($name . $_GET['image'])){
	$filevar = fopen($name.$_GET['image'], "rb") or die ("Error - could not open file");
	fpassthru($filevar);

	fclose($filevar);
	}
else 
	print ("ERRRORRR!!!");
exit;
?>