<?php 
	require('functions.php');
	/* Kat Pfeiffer */
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$user_password = $_POST['user_password'];
	$email = $_POST['email'];
	$db = mysql_connect("studentdb.gl.umbc.edu","mduran2","mduran2");
	
  	var $upass = document.getElementById("upass").value;

	var $pattern1 = /[0-9a-zA-Z]{6,}/;
	var $result = $pattern1.test($upass);
	
  	var $email = document.getElementById("email").value;

	var $pattern2 = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
	var $result2 = $pattern2.test($email);
	
	var $uname = document.getElementById("uname").value;

	var $pattern3 = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
	var $result3 = $pattern3.test($uname);

	if(!$db)
	{
		exit("Error - could not connect to MySQL");
	}
	
	$er = mysql_select_db("mduran2");
	if(!$er)
	{
		exit("Error - could not select db_user database");
	}
	if(!$firstname && !$lastname){
		$query = "select * from db_user where username='".$_POST['username']."'";
		$result = mysql_query($query);
		if (mysql_num_rows($result)==0){
			echo json_encode(1);	
		}
		else {
			echo json_encode(0);
		}
	}
	
	if($result && $result2 && $result3){
		$query2 = "select * from db_user where username='".$_POST['username']."'";
		$result2 = mysql_query($query2);
		if (mysql_num_rows($result2)==0){
			$sql_insert = "INSERT INTO db_user(firstname, lastname, email, username, user_password) 
							VALUES ('$firstname', '$lastname', '$email', '$username', '$user_password')";
			mysql_query($sql_insert);
			echo json_encode(2);
		}else{
			echo json_encode(20);
		}
	}
?>