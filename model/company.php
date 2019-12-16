<?php

class Company {

    public $id;
    public $name;
    private $variable_discount;

// constructor


    public function __construct($id, $name, $variable_discount){
        $this->id = $id;
        $this->name = $name;
        $this->variable_discount = $variable_discount;
    }

// methods

    public function getName(){
        return $this->name;
    }

    public function getDiscount(){
        return $this->variable_discount;
    }
}