<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!-- INCLUDES THE LOGO BAR & SEARCH BAR & BUTTONS -->

	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/style.css"> </style>
		<link rel="stylesheet" href="css/bootstrap.min.css"> </style>
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