<!-- Kat Pfeiffer -->

<?php
include('header.php');
?>
<html>
<head>
<title> Logout </title>
    
<!-- BEGIN ASSET INCLUDES -->
  <link rel="stylesheet" type="text/css" href="assets/styles/base.css">
  <script type="text/javascript" src="assets/js/jquery.js"></script>
<!-- END ASSET INCLUDES -->
  </head>
  <body>
  

<div class="main">
<div id="content">

<?php
include('home.php');
?>

<?php
session_start();
if(session_destroy()) 
{
header("Location: home.php"); 
}
?>

<?php
include('footer.php');
?>

</body>
</html>