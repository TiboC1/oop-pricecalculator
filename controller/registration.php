<?php

// func to sanitize input

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

// func to add new user to JSON

function addNewUser($customersData, $file, $id, $name, $compId, $depId){

    ${"$name"} = array(
        'id' => $id,
        'name' => $name,
        'company_id' => $compId,
        'department_id' => $depId
    );
    array_push($customersData, ${"$name"});
    $data_array = json_encode($customersData, JSON_PRETTY_PRINT);

    file_put_contents($file, $data_array);
}

// input validation

    // initialize input variables

    $nameErr = $compErr = $depErr = "";
    $name = "";
    $department = $company = null;

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
        $company = (int)test_input($_POST["company"]);
    }
        // department 

    if (empty($_POST["department"])) {
        $depErr = "Missing";
    }
    else {
        $department = (int)test_input($_POST["department"]);
    };

    if($name != "" && $company != "" && $department != "") {
        $lastElement = end($customers);
        $id = $lastElement->getId() + 1;
        $file = "../json/customers.json";
        addNewUser($customersData, $file, $id, $name, $company, $department);
    }
  }


