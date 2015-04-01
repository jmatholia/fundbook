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

    $email = $_COOKIE["email"];

    $idea=$db->query("SELECT * FROM users where email='$email'");

    foreach ($idea as $row) {
        $name = $row["name"];
        $biography = $row["biography"];
        $location = $row["location"];
        $picture = $row["picture"];
    }

    $_SESSION["email"] = $email;

?>

<center><p class = "bottom-three"><b><h1>
    Edit Profile
</b></h1></p></center>

<form class="form" method="post" action="saveprofile.php">
    <div>
        Edit Your Name:
        <br>
        <input name='name' type='text' class='form-control' value="<?php echo $name; ?>">
        </br>
    </div>
    <div>
        Please enter your Profile Picture URL:
        <br>
        <input name="picture" type="text" class="form-control" value="<?php echo $picture; ?>">
        </br>
    </div>
    <div>
        Please enter your location:
        <br>
        <input name="location" type="text" class="form-control" value="<?php echo $location; ?>">
        </br>
    </div>
    <div>
        Edit Your email:
        <br>
        <input name='email' type='text' class='form-control' value="<?php echo $email; ?>">
        </br>
    </div>
    <div>
        Please enter a biography:
        <br>
        <textarea name="biography" class="form-control" rows="6"><?php echo $biography; ?></textarea>
        </br>
    </div>
    
    <input type="submit" class="submit" value="Save Changes">
    
<?php include("footers.html"); ?>