<?php include("headers.php"); ?>
    
        <center>
            <h1 id="topic_heading">My Profile</h1>
        </center>

    </div><!-- USER PROFILE INFO-->

    <hr size="6" />  

    <main role="main">
        <div class="">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <ul class="h5">
                    <li class="py1"><label class="bold" for=
                    "user_name">Name</label>
                        <br><?php 
                                echo $_COOKIE["name"];

                                // connect to the database
                                $dsn = "mysql:host=localhost;dbname=fundbook";
                                //$options = array(PDO::"MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
                                $db = new PDO($dsn, "root", "fundbook");

                                $email = $_COOKIE['email'];
                                $users = $db->query("SELECT * FROM users where email='$email'");
                                foreach ($users as $row) {
                                    $user = $row;
                                }
                            ?>

                    </li>
                    <li class="py1"><label class="bold" for=
                    "user_Picture">Picture</label>          
                        <br><img id="profilepic" alt="My Picture" src="http://www.cats.org.uk/uploads/images/pages/photo_latest14.jpg" />
                    </li>
                </ul>
            </div>

            <div class="col-md-5">
                <ul class="h5">
                    <li class="py1"><label class="bold" for=
                    "user_location_name">Location</label>
                        <br>Toronto Canada <!-- field doesn't exist in databse so always Toronto-->
                    </li>
                    <li class="py1"><label class="bold" for=
                    "user_biography">Biography</label>
                        <br> <?php
                                echo $user["biography"];
                              ?>

                     </li>
                    <li class="py1"><label class="bold" for="user_name">Email</label>
                        <br><a href="mailto:abc@gmail.com"><?php
                                                                echo $user["email"];
                                                            ?></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-1"></div>
        </div>
    </main>

<?php include("footers.php"); ?>