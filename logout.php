<!-- Kat Pfeiffer -->

<?php
include('header.php');
?>

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
