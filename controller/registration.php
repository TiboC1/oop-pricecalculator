<?php

// func to sanitize input

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

// func to add new user to JSON

function addNewUser($file, $id, $name, $compId, $depId){

    ${"$name"} = new Customer($id, $name, $compId, $depId);

    array_push($customers, ${"$name"});

    file_put_contents($file, json_encode($customers));
}

// input validation

    // initialize input variables

    $nameErr = $compErr = $depErr = "";
    $name = $department = $company = "";

    // Validation

if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // name 

    if (empty($_POST["name"])) {
        $nameErr = "Missing";
    }
    else {
        $name = test_input($_POST["name"]);
    }

        // company 

    if (empty($_POST["company"])) {
        $compErr = "Missing";
    }
    else {
        $company = test_input($_POST["company"]);
    }
        // department 

    if (empty($_POST["department"])) {
        $depErr = "Missing";
    }
    else {
        $department = test_input($_POST["department"]);
    };

    if($name != "" && $company != "" && $department != "") {
        $lastElement = end($customers);
        $id = $lastElement->getId() + 1;
        $file = "../json/customers.json";
        echo "lol";
        addNewUser($file, $id, $name, $company, $department);
    }
  }


