<?php
	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		# process a POST request
		$name = $_POST["name"];
		$picture = $_POST["picture"];
		$location = $_POST["location"];
		$email = $_POST["email"];
		$biography = $_POST["biography"];
	}

	$oldemail = $_SESSION["email"];
	
	// database connection
	$dsn = "mysql:host=localhost;dbname=fundbook";
	$db = new PDO($dsn, "root", "fundbook");

	$db->query("UPDATE users SET name='$name', picture='$picture', location='$location', email='$email', biography='$biography' WHERE email='$oldemail'");

	setcookie("name", $name);
	setcookie("email", $email);

	header("Location: http://ec2-52-11-64-163.us-west-2.compute.amazonaws.com/userprofile.php");
?>