<?php session_start(); ?> 
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
	$pid = $_SESSION["pid"];

	$email = $_COOKIE["email"];

	// database connection
	$dsn = "mysql:host=localhost;dbname=fundbook";
	$db = new PDO($dsn, "root", "fundbook");
	$db->query("UPDATE projects SET name='$name', description='$description', goal=$fund, location='$location', topic='$tags', picture='$pictureUrl' WHERE pid='$pid')");

	header("Location: http://ec2-52-11-64-163.us-west-2.compute.amazonaws.com/example.php?pid=" . $pid);
?>