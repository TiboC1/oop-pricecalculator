<?php

require '../controller/import.php';
require '../controller/export.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="register.php">Restiger</a></li>
    </ul>
</nav>
<h1>Log in</h1>

<div>
    <form action="store.php" method="POST">
        <fieldset>
            <p>
                <label for="name">Your Name</label>
                <input type="text" id="name">
            </p>
            <p>
                <label>Select Company</label>
                <select id="company">
                <?php 
                    foreach($companies as $comp){
                    echo echoValueId($comp);
                    }
                ?>
                </select>
            </p>
            <p>
                <label>Select Department</label>
                <select id="department">
                <?php 
                    foreach($departments as $dep){
                    echo echoValueId($dep);
                    }
                ?>
                </select>
            </p>
        </fieldset>
        <input type="submit" value="Log In">
    </form>
</div>
</body>
</html>