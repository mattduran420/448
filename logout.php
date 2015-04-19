<?php
include('header.php');
?>

<!-- Kat Pfeiffer -->

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