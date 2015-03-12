<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		# process a POST request
		$name = $_POST["first"] . " " . $_POST["last"];
		$email = $_POST["email"];
		$password = $_POST["password"];
	}

	// database connection
	$dsn = "mysql:host=localhost;dbname=fundbook";
	//$options = array(PDO::"MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
	$db = new PDO($dsn, "root", "fundbook");

	//$db->query("INSERT INTO users (email, password, name) VALUES ('$email', '$password', '$name')");
?>

<!-- SET COOKIE FOR LOGIN -->
<?php
	setcookie("name", $name);
	setcookie("email", $email);
	/*
		// needed for starting session!
		session_start()
		$_SESSION['logged_in'] = true; //set you've logged in
		$_SESSION['last_activity'] = time(); //your last activity was now, having logged in.
		$_SESSION['expire_time'] = 3*60*60; //expire time in seconds: three hours (you must change this)
	*/
?>

<?php include("headers.php"); ?>

<center>
<h1>Thank you for registering!</h1>
You are now logged in.
</center>

<?php include("footers.php"); ?>

