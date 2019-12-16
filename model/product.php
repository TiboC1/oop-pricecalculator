<?php

class Product {
    
    public $id;
    public $name;
    public $description;
    public $price;


// constructor

    public function __construct($id, $name, $description, $price){
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

// methods

    public function getname(){
        return $this->name;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getPrice(){
        return $this-price;
    }
}