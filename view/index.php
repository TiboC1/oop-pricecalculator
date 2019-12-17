<?php

//fetching required php files

require '../controller/import.php';
require '../controller/export.php';
require '../controller/registration.php';

// starting session

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// end of PHP, start of HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css" type="text/css">
    <title>Fantasy Office Sales</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="register.php">Restiger</a></li>
        <li><a href="store.php">Store</a></li>
    </ul>
</nav>
<h1>Log in</h1>

<div>
    <form action="store.php" method="POST">
        <fieldset>
            <p>
                <label for="name">Your Name</label>
                <input type="text" id="loginName">
            </p>
            <p>
                <label>Select Company</label>
                <select id="company" name="loginComp">
                <?php 
                    foreach($companies as $comp){
                    echo echoValueId($comp);
                    }
                ?>
                </select>
            </p>
            <p>
                <label>Select Department</label>
                <select id="department" name="loginDep">
                <?php 
                    foreach($departments as $dep){
                    echo echoValueId($dep);
                    }
                ?>
                </select>
            </p>
        </fieldset>
        <input type="submit" value="Log In" name="loggedIn">
    </form>
</div>
</body>
</html>