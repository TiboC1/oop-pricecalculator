<?php

class Department {

    public $id;
    public $name;
    private $fixed_discount;

// cosntructor

    public function __construct($id, $name, $fixed_discount){
        $this->id = $id;
        $this->name = $name;
        $this->fixed_discount = $fixed_discount;
    }

// methods

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getDiscount(){
        return $this->fixed_discount;
    }

}