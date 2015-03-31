<?php include("headers.php"); ?>
    
        <center>
            <h1 id="topic_heading">Edit Profile</h1>
        </center>

    </div>

    <hr size="6" />  
    <?php 
                        
        if(isset($_COOKIE['email'])) {
            $users = $_COOKIE['email'];
            // connect to the database
            $dsn = "mysql:host=localhost;dbname=fundbook";
            //$options = array(PDO::"MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
            $db = new PDO($dsn, "root", "fundbook");
            $rs = $db->query("SELECT * FROM users where email='$email'");
            if($rs) {
                if($row = $rs->fetch()){

                    ?>

                    <main role="main">
                    <form action="saveprofile.php" method="post">
        <div class="">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <ul class="h5">
                    <!-- <li class="py1"><label class="bold" for= -->
                    <!-- "user_name">email address</label> -->
                        <!-- <br><input type="text" name="email" value="<?php echo $row['email']; ?>" disabled/> -->
                    <!-- </li> -->
                    <li class="py1"><label class="bold" for=
                    "user_name">name</label>
                        <br><input type="text" name="name" value="<?php echo $row['name']; ?>"/>
                    </li>
                    <li class="py1"><label class="bold" for=
                    "user_name">password</label>
                        <br><input type="password" name="password" value="<?php echo $row['password']; ?>"/>
                    </li>
                    <li class="py1"><label class="bold" >Picture</label>          
                        <br><img id="profilepic" alt="My Picture" src="http://www.cats.org.uk/uploads/images/pages/photo_latest14.jpg" />
                    </li>
                </ul>
            </div>

            <div class="col-md-5">
                <ul class="h5">
                   <!-- <li class="py1"><label class="bold" for= -->
                    <!-- "user_location_name">Location</label> -->
                        <!-- <br><input type="text" name="location" value="<?php echo $row['location']; ?>"/> -->
                    <!-- </li> -->
                    <li class="py1"><label class="bold" for=
                    "user_biography">Biography</label>
                        <br><input type="text" name="biography" value="<?php echo $row['biography']; ?>"/>
                     </li>
                    
                </ul>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="col-md-4">
                <button class="btn btn-block btn-primary" type="submit">Save</button>
            </div>
        </div>
        </form>
    </main>
    <?php 
                }
            }
            $db = null;
        }else{
            ?>
<script type="text/javascript">window.location.href="userprofile.php"</script>


            <?php
        }
        
    ?>
    
<?php include("footers.html"); ?>