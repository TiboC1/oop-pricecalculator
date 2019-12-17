<?php

// func to sanitize input

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

// input validation

    // initialize input variables

    $nameErr = $compErr = $depErr = "";
    $name = "";
    $department = $company = null;

    // Validation

if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // name 

    if (empty($_POST["loginName"])) {
        $nameErr = "Missing";
    }
    else {
        foreach($customers as $customer){
            if (test_input($_POST["loginName"]) == $customer->name && (int)test_input($_POST["loginComp"]) == $customer->getCompany() && (int)test_input($_POST["loginDep"]) == $customer->getDepartment()){
                $name = test_input($_POST["loginName"]);
                $company = (int)test_input($_POST["loginComp"]);
                $department = (int)test_input($_POST["loginDep"]);
            } else {
                $name = "";
            }
        }
        if ($name == ""){
            $nameErr = "Name not found, or does not match company and/or department.";
        }
    }

        // submitting form

    if($name != "" && $company != null && $department != null) {
        var_dump($name);
        $_SESSION['name'] = $name;
        $_SESSION["comp"] = $company;
        $_SESSION["dep"] = $department;
        echo "completed";
    }
  }