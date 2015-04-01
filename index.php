<?php include("headers.php"); ?>

		<!-- 3 Project Previews-->
		<center>
		<h1 id="topic_heading"> Top Six Projects in <font color=#00FFCC>Fund</font><font color=#0066FF>Book</font> </h1>
		
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

<?php include("footers.php"); ?>