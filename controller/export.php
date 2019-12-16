<?php

function echoValueId($input){

    $front = "<option value=";
    $middle =  ">";
    $back = "</option>";

    $whole = $front . $input->id . $middle . $input->name . $back;
    return $whole;
}

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