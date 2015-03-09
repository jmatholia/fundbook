<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		# process a POST request
		$name = $_REQUEST["first"]  . ', ' . $_REQUEST["last"];
		$email = $_REQUEST["email"];
		$password = $_REQUEST["password"];
	}

	echo $name;

	$dsn = "mysql:host=localhost;dbname=fundbook";
	$options = array(PDO::"MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'");
	$db = new PDO($dsn, "root", "fundbook");
	if (! $db) {
		echo "Could not connect to database!";
		 // die("Could not conect to ", . mysql_error());
	} else {
		print "Database connected :) ";
	}

	$db->query("INSERT INTO users (email, password, name) VALUES ($email, $password, $name)");
	$rows = $db->query("SELECT email FROM users WHERE email=$email");
	foreach ($rows as $row) {
		print $row["email"];
	}

?>


