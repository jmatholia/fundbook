<?php include("headers.php"); ?>

		<!-- TOP PROJECTS INFO-->
		<center>
		<h1 id="topic_heading"> Top Projects in <font color=#c12e2a>Art</font> </h1>
		</center>
		
		<!-- Project Previews-->
		<center>
		<hr color=#6699FF size="6"> 
		<div class="row">
		<center>

		<?php  // GET THE ART PROJECTS
			$dsn = "mysql:host=localhost;dbname=fundbook";
			$db = new PDO($dsn, "root", "fundbook");

			$projects=$db->query("SELECT * FROM projects where topic='art'");
			if ($projects->rowCount() > 0) {
				foreach ($projects as $project) {
					echo  '<div class="col-sm-6 col-md-4">
						    <div class="thumbnail">
						      <img src="'. $project["picture"] .'" alt="...">
						      <div class="caption">
						        <h3>' . $project["name"] . '</h3>
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
		</center>
		</div>
		</center>

<?php include("footers.php"); ?>