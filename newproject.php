<?php 

	include("headers.php");

	if (isset($_COOKIE["name"])) {
		$userName = $_COOKIE["name"];
		$userEmail = $_COOKIE["email"];

		echo	'<center>
				<h1> Create a New Project: </h1> 
				<form class="form" method="POST" action="sysnewproject.php">
					<div>
						<br />
						<p class="help"> Please enter the title of the project. </p>
				        <input name="name" type="text" size="35" placeholder="Enter A Title" required>
				        <p class="help"> Please enter the project description. </p>
				        <input name="description" type="text" size="35" placeholder="Enter A Description" required>
				        <p class="help"> Please enter the funds needed for the project. </p>
				        <input name="fund" type="text" size="35" placeholder="How much $" required>
				        <p class="help"> Please enter the location of the project. </p>
				        <input name="location" type="text" size="35" placeholder="Enter A Location" required>
				        <p class="help"> Please enter the picture url of the project. </p>
				        <input name="picture" type="text" size="35" placeholder="Picture URL" required>
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
				        	<option value="art" selected> Art </option>
						    <option value="comics"> Comics </option>
						    <option value="fashion"> Fashion </option>
						    <option value="technology"> Technology </option>
						    <option value="music"> Music </option>
						</select>
				        <br />
				        <br />
				        <br />
						<input type="submit" class="submit" value=" Create a Project ">
					</div>
				</form>
				<br />
				</center>';	
		}
	else {
		echo '<h1> Please sign in to create a project. </h1>';
	}

	include("footers.php");
?>


