<!-- 
Jacob Brodeur
ISTE.240.01 Individual Final
12.02.24 
-->

<?php
    $title = 'Cape Cod MA - ' . $pageTitle;

    $location = 'index';

    if (strpos($_SERVER['SCRIPT_NAME'], 'about')) {
        $location = 'about';
    }
    else if (strpos($_SERVER['SCRIPT_NAME'], 'beaches')) {
        $location = 'beaches';
    }
    else if (strpos($_SERVER['SCRIPT_NAME'], 'biking')) {
        $location = 'biking';
    }
    else if (strpos($_SERVER['SCRIPT_NAME'], 'breakfastLunch')) {
        $location = 'breakfastLunch';
    }
    else if (strpos($_SERVER['SCRIPT_NAME'], 'dessert')) {
        $location = 'dessert';
    }
    else if (strpos($_SERVER['SCRIPT_NAME'], 'dinner')) {
        $location = 'dinner';
    }
    else if (strpos($_SERVER['SCRIPT_NAME'], 'grading')) {
        $location = 'grading';
    }
    else if (strpos($_SERVER['SCRIPT_NAME'], 'lodging')) {
        $location = 'lodging';
    }
    else if (strpos($_SERVER['SCRIPT_NAME'], 'parks')) {
        $location = 'parks';
    }
    else if (strpos($_SERVER['SCRIPT_NAME'], 'references')) {
        $location = 'references';
    }
    else if (strpos($_SERVER['SCRIPT_NAME'], 'restaurants')) {
        $location = 'restaurants';
    }
    else if (strpos($_SERVER['SCRIPT_NAME'], 'shopping')) {
        $location = 'shopping';
    }
    else if (strpos($_SERVER['SCRIPT_NAME'], 'waterActivities')) {
        $location = 'waterActivities';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cape Cod MA</title>

    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.png">

    <link rel="stylesheet" href="./assets/css/styles.css">

    <script src="./assets/scripts/scripts.js" defer></script>

    <?php
        require_once('/home/MAIN/jsb2378/connection.db.php');
        require_once('assets/inc/tools.inc.php');
        require_once('assets/inc/validations.inc.php');
    ?>

    <!-- website fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">


</head>
<body>
    <!-- hamburger menu -->
    <div onclick="toggleMenu()" id="menuIcon"><img src="./assets/images/menuButton.png" alt="menu button" ></div>
    
    
    <!-- navigational menu -->
    <nav id="menu">
        <ul>
            <li>
                <div><a href="index.php">Home</a></div>
            </li>
            <li>
                <div><a href="restaurants.php">Restaurants</a></div>
                <ul>
                    <li><a href="breakfastLunch.php">Breakfast & Lunch</a></li>
                    <li><a href="dinner.php">Dinner</a></li>
                    <li><a href="dessert.php">Dessert</a></li>
                </ul>
            </li>
            <li>
                <div><a href="lodging.php">Lodging</a></div>
            </li>
            <li>
                <div><a>Activities</a></div>
                <ul>
                    <li><a href="beaches.php">Beaches</a></li>
                    <li><a href="biking.php">Biking</a></li>
                    <li><a href="waterActivities.php">Water Activities</a></li>
                    <li><a href="parks.php">Parks</a></li>
                    <li><a href="shopping.php">Shopping</a></li>
                </ul>
            </li>
            <li>
                <div><a href="comment.php">Comments</a></div>
            </li>
            <li>
                <div><a href="references.php">References</a></div>
            </li>
            <li>
                <div><a href="grading.php">Grading</a></div>
            </li>
        </ul>
    </nav>
        
