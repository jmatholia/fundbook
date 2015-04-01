<?php include("headers.php"); ?>
  <?php session_start(); ?>   

    <style>
      .bottom-three {
         margin-bottom: 1.5cm;
      }
    </style>

    <?php
        // database connection
        $dsn = "mysql:host=localhost;dbname=fundbook";
        $db = new PDO($dsn, "root", "fundbook");

        $email= $_COOKIE["email"];

        $user=$db->query("SELECT * FROM users where email='$email'");

        foreach ($user as $row) {
            $name = $row["name"];
            $picture = $row["picture"];
            $email = $row["email"];
            $location = $row["location"];
            $biography = $row["biography"];
        }

        $_SESSION["email"] = $email;

    ?>
    
<?php include("footers.html"); ?>