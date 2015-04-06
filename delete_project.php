<?php
	$pid =  $_GET['pid'];
	// database connection
	$dsn = "mysql:host=localhost;dbname=fundbook";
	$db = new PDO($dsn, "root", "fundbook");

	$db->query("DELETE FROM projects WHERE pid='$pid'");

	header("Location: http://ec2-52-11-64-163.us-west-2.compute.amazonaws.com/index.php");
?>