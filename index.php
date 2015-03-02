<?php include("headers.html"); ?>

		<!-- 3 Project Previews-->
		<center>
		<hr color="#6699FF" size="6"> 
		<div class="row">
		<center>
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="/css/images/sample_projectphoto.jpg" alt="...">
		      <div class="caption">
		        <h3>Project ABC</h3>
		        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		        <p><a href="example.php" class="btn btn-primary" role="button">View Page</a> <a href="#" class="btn btn-default" role="button">Add to Interests</a></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="..." alt="...">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>...</p>
		        <p><a href="#" class="btn btn-primary" role="button">View Page</a> <a href="#" class="btn btn-default" role="button">Add to Interests</a></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="..." alt="...">
		      <div class="caption">
		        <h3>Thumbnail label</h3>
		        <p>...</p>
		        <p><a href="#" class="btn btn-primary" role="button">View Page</a> <a href="#" class="btn btn-default" role="button">Add to Interests</a></p>
		      </div>
		    </div>
		  </div> 
		</center>
		</div>
		</center>
<?php	
	$db = mysql_iconnect("hostname=52.11.64.163:22;dbname=fundbook;", "root", "fundbook");
	if (! $db) {
		die("Could not conect to ", . mysql_error());
	}
	// $rows = $db->query("SELECT email FROM users WHERE name='Jahnavi'");
	// print $rows;
	echo 'Connected successfully';
	mysql_close($db);

?>

<?php include("footers.html"); ?>


