<?php
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'fund':
            fund($_POST['value']);
            break;
        case 'like':
            like();
            break;
    }
}

function fund($value) {
    if (isset($_COOKIE["most_recent_project"])) {
        $pid = $_COOKIE["most_recent_project"];
    } else {
        echo "Refresh, try again";
    }

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

    exit;
}

function like() {
    echo "The insert function is called.";
    exit;
}
?>