<?php
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'fund':
            fund($_POST['value'], $_POST['pid']);
            break;
        case 'like':
            like($_POST['pid'], 'explicit');
            break;
    }
}

function fund($value, $pid) {
    /*if (isset($_COOKIE["most_recent_project"])) {
        $pid = $_COOKIE["most_recent_project"];
    } else {
        echo "Refresh, try again";
    } */

    // validate value!!
    if (!is_numeric($value) or $value <= 0) {
        header('Content-Type: application/json');
        echo "Bad value";
        exit;
    }
    // database connection
    $dsn = "mysql:host=localhost;dbname=fundbook";
    //$options = array(PDO::"MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
    $db = new PDO($dsn, "root", "fundbook");
    $projects = $db->query("SELECT * FROM projects WHERE pid='$pid'");
    foreach ($projects as $project) {
        $author = $project["user"];
        $goal = $project["goal"];
        $category = $project["topic"];
        $title = $project["name"];
        $numBackers = $project["numBackers"] + 1;
        $raisedAmt = $project["raisedAmt"] + $value;
    }
    
    if ($value > ($goal - $raisedAmt)) {
        header('Content-Type: application/json');
        echo "Too high";
        exit;
    }

    // add to backers count for the project, add money to rasiedAmt
    $db->query("UPDATE projects SET numBackers=$numBackers, raisedAmt=$raisedAmt WHERE pid='$pid'");
    // update the view on screen
    $data = array('action' => 'fund', 'numBackers' => $numBackers, 'raisedAmt' => $raisedAmt, 'goal' => $goal);
    echo json_encode($data);
    // add to interest
    like($pid, 'implicit');

    exit;
}

function like($pid, $how) {
    // database connection
    $dsn = "mysql:host=localhost;dbname=fundbook";
    //$options = array(PDO::"MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
    $db = new PDO($dsn, "root", "fundbook");
    $projects = $db->query("SELECT * FROM projects WHERE pid='$pid'");
    foreach ($projects as $project) {
        $author = $project["user"];
        $goal = $project["goal"];
        $category = $project["topic"];
        $title = $project["name"];
        $numBackers = $project["numBackers"];
        $raisedAmt = $project["raisedAmt"];
    }
    if (isset($_COOKIE["email"])) {
        $email = $_COOKIE["email"];
        $interested = $db->query("SELECT * FROM topicInterests WHERE person='$email' and topic='$category'");
        // then add to interest
        foreach ($interested as $interest) {
            if ($how == 'explicit') {
                $data = array('action'=> 'like',  "msg"=> "added already");
                echo json_encode($data);
                exit;
            }
        }
        $db->query("INSERT INTO topicInterests VALUES ('$email', '$category')");
        if ($how == 'explicit') {
            $data = array('action'=> 'like',  'msg'=> 'added');
            echo json_encode($data);
        }
    }
    exit;
}

?>

