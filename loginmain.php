<head>
  <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'/>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
  <link rel="stylesheet" type='text/css' href="login_page/loginmain.css"/>
  <link rel="stylesheet" href="css/bootstrap.min.css"> </style>
  <!--script type="text/javascript" src="signup_page/signupmain.js"></script-->
  <script type="text/javascript" src="http://codepen.io/assets/editor/live/css_live_reload_init.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
  <a href="index.php"><font color="white">Back to Homepage</font></a>
  <center>
  <div class="wrapper">
    <h1>Sign Into Your Account</h1>
    <br>
    <?php
          if (isset($_COOKIE["login_history"])) {
            if ($_COOKIE["login_history"]=='email') {
              $problem='Email does not exist.';
            } else {
              $problem='Incorrect password.';
            }
            echo '<div class="alert alert-danger" role="alert">'. $problem .'</div>';
            setcookie("login_history", "", time()-1);
          }
    ?>
        <p>Enter your e-mail and password below.</p>
    <form class="form" method="post" action="http://ec2-52-11-64-163.us-west-2.compute.amazonaws.com/login.php">
      <input name = "email" type="email" class="email" placeholder="Email">
      <div>
	    <p class="email-help">Please enter your current email address.</p>
      </div>
      
      <input name = "password" id="pword" type="password" class="password1" placeholder="Password">
      <input type="submit" class="submit" value="Login">
    </form>
  </div>
  </center>
</body>