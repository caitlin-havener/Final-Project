<?php
	include('config.php');
	//connect to the database
	$connection=mysql_connect("localhost","root","")
		or print "connect failed because ".mysql_error();  
		
    mysql_select_db("test",$connection)
		or print "select failed because ".mysql_error();
		
	$userName = mysql_real_escape_string($_POST['userName']);
	$password = mysql_real_escape_string($_POST['password']);
	
	$addUser = mysql_query("INSERT INTO `userlist` (`userName`,`userPassword`) VALUES ('$userName','$password')");

	mysql_close($connection);

	setcookie("isLoged", 'yes', time()+2419200);
	setcookie("userName", $userName, time()+2419200);

	header("Location: $loginPage");
	exit();
?>