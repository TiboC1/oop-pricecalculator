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
        if ($compId == $company->id){
            $variableDiscount = $company->getDiscount();
        }
    };
    foreach($dep as $department){
        if ($depId == $department->id){
            $fixedDiscount = $department->detDiscount();
        }
    };

    $price = $price - $fixedDiscount;

    if ($variableDiscount != 0){
    $price = $price / $variableDiscount * 100;
    };

    return $price;
}


// echo products to html bootstrap cards WITH discounts

function echoProductWithDiscounts($input, $comp, $dep, $customer){
    $price = calculatePrice($comp, $dep, $customer, $input);

    $front = '<div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Product Image">
        <div class="card-body">
        <h5 class="card-title">';
    $middleOne = '</h5> 
        <p class="card-text">';
    $middleTwo = '</p>
        <p class="card-text">';
    $back = '</p>
        </div>
        </div>';
    $whole = $front . $input->name . $middle . $input->description . $middleTwo . $price . $back;
    return $whole;
};

// echo products to html bootstrap cards WITHOUT discounts 

function echoProductRegular($input){
    $price = $input->price;

    $front = '<div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Product Image">
        <div class="card-body">
        <h5 class="card-title">';
    $middleOne = '</h5> 
        <p class="card-text">';
    $middleTwo = '</p>
        <p class="card-text">&euro; ';
    $back = '</p>
        </div>
        </div>';
    $whole = $front . $input->name . $middleOne . $input->description . $middleTwo . $price . $back;
    return $whole;
}