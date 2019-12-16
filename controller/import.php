<?php

// importing classes from Model

require '../model/company.php';
require '../model/customer.php';
require '../model/department.php';
require '../model/product.php';

// Decoding Json

    // companies

    $jsonCompanies = file_get_contents('../json/companies.json');
    $companiesData = json_decode($jsonCompanies);

    // departments

    $jsonDepartments = file_get_contents('../json/departments.json');
    $departmentsData = json_decode($jsonDepartments);

    // customers

    $jsonCustomers = file_get_contents('../json/customers.json');
    $customersData = json_decode($jsonCustomers);

    // products

    $jsonProducts = file_get_contents('../json/products.json');
    $productsData = json_decode($jsonProducts);


// initializing empty arrays

$companies = [];
$departments = [];
$customers = [];
$products = [];

// saving data as class variables, pushing to arrays

    // company

    foreach($companiesData as $company){
        ${"$company->name"} = new Company($company->id, $company->name, $company->variable_discount);
        array_push($companies, ${"$company->name"});
    };

    // department

    foreach($departmentsData as $department){
        ${"$department->name"} = new Department($department->id, $department->name, $department->fixed_discount);
        array_push($departments, ${"$department->name"});
    };

    // customers 

    foreach($customersData as $customer){
        ${"$customer->name"} = new Customer($customer->id, $customer->name, $customer->company_id, $customer->department_id);
        array_push($customers, ${"$customer->name"});
    };

    // products

    foreach($productsData as $product){
        ${"$product->id"} = new Product($product->id, $product->name, $product->description, $product->price);
        array_push($products, ${"$product->id"});
    };