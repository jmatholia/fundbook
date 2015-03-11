<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		# process a POST request
		$email = $_POST["email"];
		$password = $_POST["password"];
	}

	// database connection
	$dsn = "mysql:host=localhost;dbname=fundbook";
	//$options = array(PDO::"MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
	$db = new PDO($dsn, "root", "fundbook");

	$user=$db->query("SELECT * FROM users where email='$email'");
	if ($user->rowCount()==1) {

		foreach ($user as $row) {
			if ($row["password"]==$password) {
				setcookie("name", $row["name"]);
				setcookie("email", $row["email"]);
				header("Location: http://ec2-52-11-64-163.us-west-2.compute.amazonaws.com/index.php");
			}
			else{
				setcookie("login_history", "pword");
				header("Location: http://ec2-52-11-64-163.us-west-2.compute.amazonaws.com/loginmain.php");
			}
		}
	}
	else{
		setcookie("login_history", "email");
		header("Location: http://ec2-52-11-64-163.us-west-2.compute.amazonaws.com/loginmain.php");
	}

?>
