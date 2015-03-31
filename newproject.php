<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/index.css"> </style>
</head>


<body>
	<?php 
	if (isset($_COOKIE["name"])) {
		print '<a href="logout.php" id="signin"> Sign Out </a>';
		print '<br />';
		$userName = $_COOKIE["name"];
		$userEmail = $_COOKIE["email"];
		print 'Hi: ' . $userName;

		print '	<form class="form" method="POST" action="sysnewproject.php">
					<div>
						<br />
						<p class="name-help"> Please enter the title of the project. </p>
				        <input name="name" type="text" size="35" placeholder="Title" required>
				        <p class="description-help"> Please enter the project description. </p>
				        <input name="description" type="text" size="35" placeholder="Description" required>
				        <p class="fund-help"> Please enter the funds needed for the project. </p>
				        <input name="fund" type="text" size="35" placeholder="fund" required>
				        <p class="location-help"> Please enter the location of the project. </p>
				        <input name="location" type="text" size="35" placeholder="location" required>
				        <p class="picture-help"> Please enter the picture url of the project. </p>
				        <input name="picture" type="text" size="35" placeholder="picture" required>
				        <br />
				        <p class="period-help"> Please select the duration of the project. </p>
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
				        <p class="tags-help"> Please select the topic of the project. </p>
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
				<a class="ilink" href="index.php"> Go back to homepage </a>';	
		}


	?>


</body>
