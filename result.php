<?php include("headers.php"); ?>

		<!-- TOP PROJECTS INFO-->
		<center>
		<h1 id="topic_heading"> Searching Result</h1>
		</center>
		
		<!-- Project Previews-->
		<center>
		<hr color=#6699FF size="6"> 
		<div class="row">
		<center>

		<?php  
			$dsn = "mysql:host=localhost;dbname=fundbook";
			$db = new PDO($dsn, "root", "fundbook");
			if(isset($_GET['search'])) {
				$projects=$db->query("SELECT * FROM projects where name like '%".$_GET['search']."%'");
				if ($projects->rowCount() > 0) {
					foreach ($projects as $project) {
						echo  '<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							      <img src= ' . $project["picture"] . ' alt="..." width="450" height="300">
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
			}else{
				echo  '<div class="col-sm-6 col-md-4">
						    <div class="thumbnail">
						      <div class="caption">
						        no result!
						      </div>
						    </div>
						</div>';
			}
			
		?>
		</center>
		</div>
		</center>

<?php include("footers.php"); ?>