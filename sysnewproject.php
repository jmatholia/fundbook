<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		# process a POST request
		$name = $_POST["name"];
		$description = $_POST["description"];
		$fund = (int)$_POST["fund"];
		$location = $_POST["location"];
		$period = $_POST["period"];
		$tags = $_POST["tags"];
		$pictureUrl = $_POST["picture"];
	}

	$email = $_COOKIE["email"];

	// Generate a unique ID
	$prefix = "pid";
	$uniqid = $prefix . uniqid();
	$id = uniqid($prefix);

	$cdata = date('Y-m-d H:i:s');

	// database connection
	$dsn = "mysql:host=localhost;dbname=fundbook";
	$db = new PDO($dsn, "root", "fundbook");
	$db->query("INSERT INTO projects (pid, name, goal, topic, location, creation, user, description, picture) VALUES ('$id', '$name', $fund, '$tags', '$location', '$cdata', '$email', '$description', '$pictureUrl')");

	header("Location: http://ec2-52-11-64-163.us-west-2.compute.amazonaws.com/example.php?pid=" . $id);
?>

