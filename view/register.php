<?php
//fetching required php files

require '../controller/import.php';
require '../controller/export.php';
require '../controller/registration.php';

// starting session

if(session_status() !== PHP_SESSION_ACTIVE) session_start();

// end of PHP, start of HTML

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css" type="text/css">

    <title>FOS Registration</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="register.php">Restiger</a></li>
        <li><a href="store.php">Store</a></li>
    </ul>
</nav>
<?php if(isset($_POST["submit"]) && isset($_POST["name"]) && isset($_POST["company"]) && isset($_POST["department"])){?>

    <h1>Registration Complete</h1>
    <p>Please <a href='index.php'>Log In</a></p>

<?php } else {?>

<h1>Registration Form</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <fieldset>
            <p>
                <label for="name">Your Name</label>
                <input type="text" name="name" value="<?php echo htmlspecialchars($name);?>">
                <span class="error"><?php echo $nameErr;?></span>
            </p>
            <p>
                <label>Select Company</label>
                <select id="company" name="company">
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
                <select id="department" name="department">
                    <option selected disabled>Please select one option</option>
                <?php 
                    foreach($departments as $dep){
                    echo echoValueId($dep);
                    }
                ?>
                </select><span class="error"><?php echo $depErr;?></span>
            </p>
        </fieldset>
        <input type="submit" value="Register" name="submit">
    </form>
 
<?php     
} var_dump($_POST);
?>
</body>
</html>