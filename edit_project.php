 <?php session_start(); ?> 
 <?php
	include("headers.php"); 	

 	// ACTUAL PROJECT 
	// get relevant project
	$pid = $_GET["pid"];
	$_SESSION["pid"] = $pid;
	$dsn = "mysql:host=localhost;dbname=fundbook";
	//$options = array(PDO::"MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
	$db = new PDO($dsn, "root", "fundbook");
	$projects = $db->query("SELECT * FROM projects WHERE pid='$pid'");
	foreach ($projects as $project) {
		$author = $project["user"];
		$goal = $project["goal"];
		$category = $project["topic"];
		$title = $project["name"];
		$description = $project["description"];
		$numBackers = $project["numBackers"];
		$raisedAmt = $project["raisedAmt"];
		$location =  $project["location"];
		$picture = $project["picture"];
		$rating = $project["rating"];
	}
?>

<center>
	<h1> Edit This Project: </h1> 
	<form class="form" method="POST" action="edited_project.php">
		<div>
			<br />
			<p class="help"> Please enter the title of the project. </p>
	        <input name="name" type="text" size="35" placeholder="Enter A Title" value="<?php echo $title; ?>">
	        <p class="help"> Please enter the project description. </p>
	        <input name="description" type="text" size="35" placeholder="Enter A Description" value="<?php echo $description; ?>">
	        <p class="help"> Please enter the funds needed for the project. </p>
	        <input name="fund" type="text" size="35" placeholder="How much $" value="<?php echo $goal; ?>">
	        <p class="help"> Please enter the location of the project. </p>
	        <input name="location" type="text" size="35" placeholder="Enter A Location" value="<?php echo $location; ?>">
	        <p class="help"> Please enter the picture url of the project. </p>
	        <input name="picture" type="text" size="35" placeholder="Picture URL" value="<?php echo $picture; ?>">
	        <br />
	        <p class="help"> Please select the duration of the project. </p>
	        <select name="period">
	        	<option value="7" selected> 1 week </option>
			    <option value="14"> 2 weeks </option>
			    <option value="21"> 3 weeks </option>
			    <option value="30"> 1 month </option>
			    <option value="90"> 3 months </option>
			    <option value="180"> 6 months </option>
			    <option value="365"> 1 year </option>
			</select>
	        <br />
	        <p class="help"> Please select the topic of the project. </p>
	        <select name="tags">
	        	<option value="Art" <?php if($category=='Art'){echo "selected";} ?>> Art </option>
			    <option value="Comics" <?php if($category=='Comics'){echo "selected";} ?>> Comics </option>
			    <option value="Fashion" <?php if($category=='Fashion'){echo "selected";} ?>> Fashion </option>
			    <option value="Technology" <?php if($category=='Technology'){echo "selected";} ?>> Technology </option>
			    <option value="Music" <?php if($category=='Music'){echo "selected";} ?>> Music </option>
			</select>
	        <br />
	        <br />
	        <br />
			<input type="submit" class="submit" value=" Edit Project ">
		</div>
	</form>
	<br />
	</center>

<?php include("footers.php"); ?>