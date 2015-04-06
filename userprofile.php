<?php include("headers.php"); ?>
    
        <center>
            <h1 id="topic_heading"><?php echo $_COOKIE["name"]; ?></h1><a href="userprofile_edit.php" type="button" class="btn btn-default">Edit Profile</a>
        </center>

    </div><!-- USER PROFILE INFO-->

    <hr size="6" />  

    <main role="main">
        <div class="">
                <div class="col-md-2"></div>
            <div class="col-md-4">
                <ul class="h5">
                        <br><?php 
                                // connect to the database
                                $dsn = "mysql:host=localhost;dbname=fundbook";
                                //$options = array(PDO::"MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
                                $db = new PDO($dsn, "root", "fundbook");

                                $email = $_COOKIE['email'];
                                $users = $db->query("SELECT * FROM users where email='$email'");
                                foreach ($users as $row) {
                                    $user = $row;
                                }
                                $interests = $db->query("SELECT * FROM topicInterests WHERE person='$email'");
                                $intStr = 'WHAT';
                                foreach ($insterests as $interest) {
                                    $intStr = $intStr . ', ' .$interest["topic"];
                                }
                            ?>

                    </li>
                    <li class="py1"><label class="bold" for=
                    "user_Picture"></label>          
                        <br><img id="profilepic" alt="Upload A Picture" src=<?php echo $user["picture"]; ?> />
                    </li>
                </ul>
            </div>

            <div class="col-md-5">
                <ul class="h5">
                    <li class="py1"><label class="bold" for=
                    "user_location_name">Location</label>
                        <br><?php echo $user["location"]; ?>
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
                    <li class="py1"><label class="bold" for=
                    "user_biography">Interests</label>
                        <br> <?php
                                echo $intStr;
                              ?>

                     </li>
                </ul>
            </div>
            <div class="col-md-1"></div>
        </div>
    </main>


<?php include("footers.php"); ?>