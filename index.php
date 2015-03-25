<?php include("headers.php"); ?>

		<!-- 3 Project Previews-->
		<center>
		<hr color="#6699FF" size="6"> 
		<div class="row">
		<center>
		 <?php // DUMMY PROJECT LEFT IN FOR DEMO ?>
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="/css/images/sample_projectphoto.jpg" alt="...">
		      <div class="caption">
		        <h3>Project ABC</h3>
		        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		        <p><a href="example.php?pid=0" class="btn btn-primary" role="button">View Page</a> <a href="#" class="btn btn-default" role="button">Add to Interests</a></p>
		      </div>
		    </div>
		  </div>
		  <?php  // GET ALL THE PROJECTS IN THE DATABASE, CHANGE THIS LATTER
			$dsn = "mysql:host=localhost;dbname=fundbook";
			$db = new PDO($dsn, "root", "fundbook");

			$projects=$db->query("SELECT * FROM projects");
			if ($projects->rowCount() > 0) {
				foreach ($projects as $project) {
					echo  '<div class="col-sm-6 col-md-4">
						    <div class="thumbnail">
						      <img src="..." alt="...">
						      <div class="caption">
						        <h3>'. $project["name"] .'</h3>
						        <p>...</p>
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
		</center>
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