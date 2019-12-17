<?php
if(isset($_POST["logOut"])){
    $_SESSION["name"] = "";
    $_SESSION["comp"] = "";
    $_SESSION["dep"] = "";
    $nameErr = "";
}