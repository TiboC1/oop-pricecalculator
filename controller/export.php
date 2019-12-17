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

function calculatePrice($comp, $dep, $prod){

    $price = $prod->price;
    
    $fixedDiscount = (int)$dep;
    $variableDiscount = (int)$comp;
    

    $price = $price - $fixedDiscount;

    if ($variableDiscount != 0){
    (float)$price = ($price * $variableDiscount) / 100;
    };
    if ($price < 0) $price = 0;

    return number_format((float)$price, 2, '.', '');
}


// echo products to html bootstrap cards WITH discounts

function echoProductWithDiscounts($input, $comp, $dep){

    $price = calculatePrice($comp, $dep, $input);
    $originalPrice = '<span class="original"> &euro; ' . $input->price . '</span> &euro; ';

    $front = '<div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Product Image">
        <div class="card-body">
        <h5 class="card-title">';
    $middleOne = '</h5> 
        <p class="card-text">';
    $middleTwo = '</p>
        <p class="card-text discount">';
    $back = '</p>
        </div>
        </div>';
    $whole = $front . $input->name . $middleOne . $input->description . $middleTwo . $originalPrice . $price . $back;
    return $whole;
};

// echo products to html bootstrap cards WITHOUT discounts 

function echoProductRegular($input){
    $price = $input->price;
    $price = number_format((float)$price, 2, '.', '');

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

function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}
