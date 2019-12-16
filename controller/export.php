<?php

// echo comp & dep names to html forms

function echoValueId($input){

    $front = "<option value=";
    $middle =  ">";
    $back = "</option>";

    $whole = $front . $input->id . $middle . $input->name . $back;
    return $whole;
}

// price calculator

function calculatePrice($comp, $dep, $customer, $prod){

    $price = $prod->price;
    $compId = $customer->company_id;
    $depId = $customer->department_id;
    $fixedDiscount = 0;
    $variableDiscount = 0;
    foreach($comp as $company){

    };






}


// echo products to html bootstrap cards

function echoProduct($input){

    $front = '<div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Product Image">
        <div class="card-body">
        <h5 class="card-title">';
    $middle = '</h5> 
        <p class="card-text">';
    $back = '</p>
        </div>
        </div>';
    $whole = $front . $input->name . $middle . $input->description . $back;
    return $whole;
}