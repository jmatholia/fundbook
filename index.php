<?php include("headers.php"); ?>

		<!-- 3 Project Previews-->
		<center>
		<h1> Top Six Projects on Fundbook </h1>
		<hr color="#6699FF" size="6"> 
		<div class="row">
		  <?php  // GET ALL THE PROJECTS IN THE DATABASE, CHANGE THIS LATER
			$dsn = "mysql:host=localhost;dbname=fundbook";
			$db = new PDO($dsn, "root", "fundbook");

			$projects=$db->query("SELECT * FROM projects LIMIT 6");
			if ($projects->rowCount() > 0) {
				foreach ($projects as $project) {
					echo  '<div class="col-sm-6 col-md-4">
						    <div class="thumbnail">
						      <img src= ' . $project["picture"] . ' alt="...">
						      <div class="caption">
						        <h3>'. $project["name"] .'</h3>
						        <p>' . $project["description"] . '</p>
						        <p><a href="example.php?pid='. $project["pid"] . 
						        			'" class="btn btn-primary" role="button">View Page</a> 
						        	<a href="#" class="btn btn-default" role="button">Add to Interests</a>
						        </p>
						      </div>
						    </div>
						  </div>';
				}
			}
		?> 
		</div>
		</center>
<?php
	// database connection
	$dsn = "mysql:host=localhost;dbname=fundbook";
	//$options = array(PDO::"MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
	$db = new PDO($dsn, "root", "fundbook");
	if (! $db) {
		echo "Could not connect to database!";
		// die("Could not conect to ", . mysql_error());
	} else {
		print "Database connected :) ";
	}

	$rows = $db->query("SELECT email FROM users WHERE name='Jahnavi'");
	foreach ($rows as $row) {
		print $row["email"];
	}
?>

<?php include("footers.php"); ?>