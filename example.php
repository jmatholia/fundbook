<?php include("headers.php"); ?>

	<!-- Menu Horizontal -->
	<ul class="menu">
	<li class="current"></li>
	<li></li>
	<li>
	<ul>
	  <li><a href=""><i class="fa fa-car"></i> Sub Item</a></li>
		<li><a href=""><i class="fa fa-arrow-circle-right"></i> Sub Item</a>
			<ul>
			<li><a href=""><i class="fa fa-comments"></i> Sub Item</a></li>
			<li><a href=""><i class="fa fa-check"></i> Sub Item</a></li>
			<li><a href=""><i class="fa fa-cutlery"></i> Sub Item</a></li>
			<li><a href=""><i class="fa fa-cube"></i> Sub Item</a></li>
			</ul>
		</li>
		<li class="divider"><a href=""><i class="fa fa-file"></i> li.divider</a></li>
		</ul>
	</li>
	<li></li>
	</ul>

	<div class="grid">
		
	<!-- ===================================== END HEADER ===================================== -->
	<?php
	 // ACTUAL PROJECT 
		// get relevant project
		$pid = $_GET["pid"];
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
	
	<div class="col_12">
		<div class="col_9">
		  <h3><?php echo $title; ?> </h3>
		  <p align="left"><strong><img class="align-left" src="<?php echo $picture; ?>" width="400" height="150">
			About This Project: </strong></p>
		  <p align="left"><?php echo $description; ?> </p>
		</div>
	<div class="col_3">
		<h4>Fund Info</h4>
		<ul class="icons">
		<li><i class="fa fa-li fa-check"></i> <?php echo $numBackers; ?>  Backers</li>
		<li><i class="fa fa-li fa-check"></i> $<?php echo $raisedAmt; ?>  pledged of $<?php echo $goal; ?>  goal </li>
		<li><i class="fa fa-li fa-check"></i> 13 days to go</li>
		<li><i class="fa fa-li fa-check"></i> Current Rating: <?php echo $rating; ?></li>
		</ul>
		<h6>Author Information</h6>
	    <p>
	    <?php echo $author; ?></p>

		<a type="button" href=<?php echo "back_project.php?pid=". $pid; ?> class="btn btn-default">Back This Project</a>
		<br />
		<br><?php	echo "<a href='upvote.php?pid=" . $pid . 
				"' button type='button' class='btn btn-success'>Upvote</a> ". 
				" <a href='downvote.php?pid=" . $pid . "' button type='button' " . 
				"class='btn btn-danger'>Downvote</a>"; ?></br>
	</div>
		
		<hr>
		<hr/>
		
		<div class="col_3">
		  <h4>Project Location</h4>
		  <p align="left"><?php echo $location; ?></p>
		</div> 
		
		<div class="col_3">
		<h4 align="left">Project Category</h4>
		<p align="left"><?php echo $category; ?></p>
		</div>
		
		
		<div class="col_3">
		  <h4>Author Information</h4>
		  <p> <?php echo $author; ?> </p>
		</div>
	</div>

	<div class="disqus">
      <div id="disqus_thread"></div>
    	<script type="text/javascript">
        /* * * CONFIGURATION VARIABLES * * */
        var disqus_shortname = 'fundbook';
        
        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    	</script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
	</div>

	</div><!-- END GRID -->

<?php include("footers.php"); ?>