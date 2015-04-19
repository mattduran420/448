<?php
include('header.php');
?>

<!-- Kat Pfeiffer -->

<?php
if(session_destroy()) 
{
header("Location: home.php"); 
}
?>

<?php
include('footer.php');
?>