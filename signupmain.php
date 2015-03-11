<head>
  <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'/>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
  <link rel="stylesheet" type='text/css' href="signup_page/signupmain.css"/>
  <link rel="stylesheet" href="css/bootstrap.min.css"> </style>
  <script type="text/javascript" src="signup_page/signupmain.js"></script>
  <script type="text/javascript" src="http://codepen.io/assets/editor/live/css_live_reload_init.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
  <a href="index.php"><font color="white">Back to Homepage</font></a>
  <center>
  <div class="wrapper">
    <h1>Register For An Account</h1>
    <br>
        <p>To sign-up for a free basic account please provide us with some basic information using
    the contact form below. Please use valid credentials.</p>
    <form class="form" method="post" action="http://ec2-52-11-64-163.us-west-2.compute.amazonaws.com/signup.php">
      <input name = "first" type="text" class="name" placeholder="First Name">
      <div>
	    <p class="name-help">Please enter your first name.</p>
      </div>
      
      <input name = "last" type="text" class="name" placeholder="Last Name">
      <div>
        <p class="name-help">Please enter your last name.</p>
      </div>

      <input name = "email" type="email" class="email" placeholder="Email">
      <div>
	    <p class="email-help">Please enter your current email address.</p>
      </div>
      
      <input name = "password" id="pword" type="password" class="password1" placeholder="Password">
      
      <input type="password" id="pword2" class="password2" placeholder="Re-enter Password" oninput="checkMatch()">

      <div id="confirm_match" class="alert alert-warning" role="alert"></div>

      <input type="submit" class="submit" value="Register">
    </form>
  </div>
  </center>
</body>