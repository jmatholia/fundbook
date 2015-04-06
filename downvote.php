<?php
	// database connection
	$dsn = "mysql:host=localhost;dbname=fundbook";
	$db = new PDO($dsn, "root", "fundbook");

	$pid = $_GET['pid'];

	$db->query("UPDATE projects SET rating=(rating - 1) WHERE pid='$pid'");

	header("Location: http://ec2-52-11-64-163.us-west-2.compute.amazonaws.com/example.php?pid=" . $pid);
?>