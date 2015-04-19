<?php
include('header.php');
?>

<!-- Kat Pfeiffer -->

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