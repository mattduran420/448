<?php 
	session_start();
	require('functions.php');
	//check if user is logged in
	if(!isset($_SESSION['login']) && basename($_SERVER['PHP_SELF']) != "login.php" && basename($_SERVER['PHP_SELF']) != "register.php"){
		header('Location: login.php');
	}
?>
<html>
	<head>
		<title>Musician's Ink</title>
		<!-- BEGIN ASSET INCLUDES -->
		<link rel="stylesheet" type="text/css" href="assets/styles/base.css">
		<script type="text/javascript" src="assets/js/jquery.js"></script>
		<script type="text/javascript" src="assets/js/upload_comic.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
		<!-- END ASSET INCLUDES -->
	</head>
	<body>
	
		<!-- HEADER -->
		<div id="header">
			<div id="header-nav" class="pull-right">
				<ul>
					<?php if(!isset($_SESSION['login'])){ ?>
					<li><a href="login.php">Login</a></li>
					<li><a href="register.php">Sign Up</a></li>
					<?php } ?>
					<?php if(isset($_SESSION['login'])){ ?>
					<li><a href="view_drafts.php">View/Edit Drafts</a></li>
					<li><a href="upload_comic.php">Upload Comic</a></li>
					<li><a href="search.php">Search Comics</a></li>
					<li id="logout"><a href="logout.php">Log Out</a></li>
					<?php } ?>
				</ul>
			</div>
			<div id="logo">
				<a href="<?php echo substr($str, 0,strrpos(getcwd(), '/')); ?>">
					<img src="assets/img/logo.png" height="150px" alt="Musician's Ink logo">
				</a>
			</div>

		</div>
		<!-- END HEADER -->

		<div class="main">
			<div id="content">