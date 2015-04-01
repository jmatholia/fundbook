<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!-- INCLUDES THE LOGO BAR & SEARCH BAR & BUTTONS -->

<?php
	// FOR WHEN WE START USING SESSIONS INSTEAD OF COOKIES
/*
	if( $_SESSION['last_activity'] < time()-$_SESSION['expire_time'] ) { //have we expired?
	    header('Location: http://ec2-52-11-64-163.us-west-2.compute.amazonaws.com//logout.php');
	} else{ //if we haven't expired:
	    $_SESSION['last_activity'] = time(); //this was the moment of last activity.
	}	

	// NOTES:
	// and add start start_session(); in login.php and signup.php
	// and replace all $_COOKIE with $_SESSION, can do isset($_SESSION["name"]) 
	// don't know how to unset specific session variables yet, logout.php would have to change

  */
?>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/style.css"> </style>
		<link rel="stylesheet" href="css/bootstrap.min.css"> </style>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="mouse_events.js"></script>
	</head>

	<body>
		<div id="topbar"> 
			<div id="frozen">
				<h1 id="main"><a href="index.php" style="text-decoration:none;"><font color=#00FFCC>Fund</font><font color=#0066FF>Book</font></a></h1>
				<?php
					if (!isset($_COOKIE["name"])) {
						echo '<a href="loginmain.php" id="signin" class="top"> Sign In </a>';
						echo '<a href="signupmain.php" id="signup" class="top"> Sign Up </a>';
					} else {
						echo '<a href="logout.php" id="signin" class="top"> Sign Out </a>';	
					}
				?>
				<a class="top" href="userprofile.php" id="userprofile">
					<?php 
					echo $_COOKIE["name"];
					?>
				</a>
				<!-- Search Bar -->
				<div id="search">
					<h3 id="searchtext" onclick="haha();"> Search: </h3>
					<!--<form action="demo_form.asp">
					  First name: <input type="text" name="fname"><br>
					  Last name: <input type="text" name="lname"><br> -->
					<input type="text" placeholder="Search for a Project" id="searchInput"> </input>
				</div>
				<!-- </form> -->
			</div>
			<!-- Buttons for Topic Links -->
			<div id="buttons"> 
				<center>
				<a href="art.php" button type="button" class="btn btn-danger btn-lg">Art</a>
				<a href="comics.php" button type="button" class="btn btn-warning btn-lg">Comics</a>
				<a href="fashion.php" button type="button" class="btn btn-success btn-lg">Fashion</a>
				<a href="technology.php" button type="button" class="btn btn-info btn-lg">Technology</a>
				<a href="music.php" button type="button" class="btn btn-primary btn-lg">Music</a>
				</center>
			</div>
		</div>