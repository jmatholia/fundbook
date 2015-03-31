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

	print "$email";
	print '<br />';
	print "$id";
	print '<br />';
	print "$name";
	print '<br />';
	print "$description";
	print '<br />';
	print "$fund";
	print '<br />';
	print "$location";
	print '<br />';
	print "$period";
	print '<br />';
	print "$cdata";
	print '<br />';
	print "$pictureUrl";
	print '<br />';

	// database connection
	$dsn = "mysql:host=localhost;dbname=fundbook";
	$db = new PDO($dsn, "root", "fundbook");
    print 'Gina ~~~~~~~';
	$db->query("INSERT INTO projects (pid, name, goal, topic, location, creation, user, description, picture) VALUES ('$id', '$name', $fund, '$tags', 0, '$cdata', '$email', '$description', '$pictureUrl')");
	print '<br />';
	print 'Your Project Is Created !';
	
?>
	<br />
	<a class="ilink" href="index.php"> Go back to homepage </a>
