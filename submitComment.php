<!-- 
Jacob Brodeur
ISTE.240.01 - Individual Final
12.01.24
-->

<?php
    $pageTitle = "Comment Submission";
    require_once('assets/inc/header.inc.php');

    echo '<main><div id="submission">';

    if($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

    $stmt = $mysqli -> prepare("INSERT INTO `travelchat` (`from`, `message`, `timestamp`) VALUES (?, ?, now())");
    // i, d, s, b; where i = integer, d = double, s = string, b = blob
    $stmt -> bind_param("ss", $name, $message);

    $name = sanitize($_POST['userName'], 255);
    $message = sanitize($_POST['message'], 1000);

    // Only one word alphabetic names are allowed, Not set up for heiphenated or numeric
    if(!alphaSpacePunctuation($name)) {
        echo '<p>You have provided an invalid name. <a href="comment.php">Return to Comments</a></p>';
        exit();
    }

    $stmt -> execute();

    echo '<p>Thank you for your comment. <a href="comment.php">Return to Comments</a></p></div>';

?>