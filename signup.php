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
?>

<?php include("headers.php"); ?>

<center>
<h1>Thank you for registering!</h1>
You are now logged in.
</center>

<?php include("footers.php"); ?>

