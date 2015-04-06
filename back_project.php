<?php include("headers.php"); ?>

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
			$numBackers = $project["numBackers"];
			$raisedAmt = $project["raisedAmt"];
			// $location = need query
		}
	?>
		<center>
		<h3><?php echo $title; ?> </h3>
		<h4>Fund Info: </h4>
		<ul style="display:inline" class="icons">
		<li id = "backers"><i class="fa fa-li fa-check"></i> <?php echo $numBackers; ?>  Backers</li>
		<li id = "raised"><i class="fa fa-li fa-check"></i> $<?php echo $raisedAmt; ?>  pledged of $<?php echo $goal; ?>  goal </li>
		<li><i class="fa fa-li fa-check"></i> 13 days to go</li>
		</ul>
		<h4 id="warning"></h4>
		<input id="fund" name = "fund" type="fund" class="fund" placeholder="0.00">
		<a class="btn btn-default" val="fund" pid= <?php echo '"'. $pid .'"'; ?> >Fund!</a>
		</center>

<?php include("footers.php"); ?>