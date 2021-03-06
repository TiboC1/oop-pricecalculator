<?php

// starting session

if(session_status() !== PHP_SESSION_ACTIVE) session_start();

//fetching required php files

require '../controller/import.php';
require '../controller/export.php';
require '../controller/login.php';
require '../controller/logout.php';

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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <input type="submit" value="Log out" name="logOut">
    </form>
</nav>
<h1>Welcome to Fantasy Office Store</h1>
<?php if(!isset($_SESSION["name"]) || $_SESSION["name"] == ""){?>
<div class ="center">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <fieldset>
            <p>
                <label for="name">Your Name</label>
                <input type="text" id="name" name="loginName">
                <span class="error"><?php echo $nameErr;?></span>
            </p>
            <p>
                <label>Select Company</label>
                <select id="company" name="loginComp">
                <option selected disabled>Please select one option</option>
                <?php 
                    foreach($companies as $comp){
                    echo echoValueId($comp);
                    }
                ?>
                </select><span class="error"><?php echo $compErr;?></span>
            </p>
            <p>
                <label>Select Department</label>
                <select id="department" name="loginDep">
                <option selected disabled>Please select one option</option>
                <?php 
                    foreach($departments as $dep){
                    echo echoValueId($dep);
                    }
                ?>
                </select><span class="error"><?php echo $depErr;?></span>
            </p>
        </fieldset>
        <input type="submit" value="Log In" name="loggedIn">
    </form>
</div>
<?php } else {?>
<div class="center">
    <h2>Logged in as <?php echo ucfirst($_SESSION['name']);?> </h2>
    <p>continue to <a href="store.php"> Store</a></p>
    
</div>
<?php } ?>
</body>
</html>