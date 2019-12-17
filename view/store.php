<?php
//fetching required php files

require '../controller/import.php';
require '../controller/export.php';
require '../controller/login.php';
require '../controller/logout.php';

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css" type="text/css">
    <title>FOS Store</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="register.php">Restiger</a></li>
        <li><a href="store.php">Store</a></li>
    </ul>
    <form action="<?php echo htmlspecialchars("index.php");?>" method="POST">
        <input type="submit" value="Log out" name="logOut">
    </form>
</nav>
<h1>List of Products</h1>
<div class="container-fluid">
    <?php
    foreach($products as $product){

        if(isset($_SESSION["name"])){
            echo echoProductWithDiscounts($product, $_SESSION["comp"], $_SESSION["dep"]);
        } else {
            echo echoProductRegular($product);
        }
}
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>