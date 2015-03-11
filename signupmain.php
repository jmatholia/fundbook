<head>
  <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'/>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
  <link rel="stylesheet" type='text/css' href="signup_page/signupmain.css"/>
  <!--script type="text/javascript" src="signup_page/signupmain.js"></script-->
  <script type="text/javascript" src="http://codepen.io/assets/editor/live/css_live_reload_init.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
  <div class="wrapper">
    <h1>Register For An Account</h1>
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
      
      <input name = "password" type="password" class="password1" placeholder="Password">
      <div>
      <p class="password1-help">Please enter a password.</p>
      </div>
      
      <input type="password" class="password2" placeholder="Re-enter Password">
      <div>
      <p class="password2-help">Please re-enter the password.</p>
      </div>
      
      <input type="submit" class="submit" value="Register">
    </form>
  </div>
 </body>