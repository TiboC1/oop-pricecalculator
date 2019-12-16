<?php

class Customer {

    private $id;
    public $name;
    private $company_id;
    private $department_id;

// constructor

    public function __construct($id, $name, $company_id, $department_id){
        $this->id = $id;
        $this->name = $name;
        $this->company_id = $company_id;
        $this->department_id = $department_id;
    }

// methods

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getCompany(){
        return $this->company_id;

    }
    
    public function getDepartment(){
        return $this->department_id;
    }
}