<?php  
function change($email, $password,$name, $biography) {
 	$dsn = "mysql:host=localhost;dbname=fundbook";
    $db = new PDO($dsn, 'root', 'fundbook');
	$rs = $db->exec("update users set password='md5($password)',name='$name',biography='$biography' where email='$email'");
	return $rs;
}

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['biography'])) {
	if(change($_POST['password'],$_POST['name'],$_POST['biography']))
		echo "<script>alert('success');history.back();</script>";
	else{
		echo "<script>alert('fail!');history.back()</script>";
	}
}else{
	echo "<script>alert('fail!');history.back()</script>";
}

?>