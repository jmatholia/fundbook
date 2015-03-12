<?php
	setcookie("name", "", time()-1);
	setcookie("email", "", time()-1);
	header("Location: http://ec2-52-11-64-163.us-west-2.compute.amazonaws.com/index.php");
?>