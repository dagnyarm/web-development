<?php

class Employee{
    public $name;
    public $age;
    public $salary;

    function __construct($name, $age, $salary){
        if(!is_string($name)){
            throw new Exception("Name must be type of string");
        }
        if(!is_int($age)){
            throw new Exception("Age must be a number");
        }
        if(!is_double($salary)){
            throw new Exception("Salary must be a number");
        }

        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function get_name(){
        return $this->name;
    }

    public function get_age(){
        return $this->age;
    }

    public function get_salary(){
        return $this->salary;
    }

    public function check_age(){
        if($this->age < 18){
            return false;
        }
        return true;
    }

    public function set_age($newAge){
        if(!is_int($newAge)){
            throw new Exception("Invalid type of argument");
        }
        $temp = $this->age;
        $this->age = $newAge;
        if(!$this->check_age()){
            $this->age = $temp;
            throw new Exception("Age of the employee must be over 18");
        }
        
        return $this->name . "'s age was updated to " . $this->age;
    }
}