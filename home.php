<?php
//check if user is logged in
if($_SESSION['is_aunthenticated']){
	header('Location: /login.php');
}

include('header.php');
//include('sidebar.php');
include('footer.php');
?>