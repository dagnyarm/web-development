<?php

class User{
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

    public function set_name($newName){
        if(!is_string($newName)){
            throw new Exception("Invalid type of argument");
        }
        $oldName = $this->name;
        $this->name = $newName;
        return $oldName . "'s name was updated to " . $this->name;
    }

    public function set_age($newAge){
        if(!is_int($newAge)){
            throw new Exception("Invalid type of argument");
        }
        $this->age = $newAge;
        return $this->name . "'s age was updated to " . $this->age;
    }

    public function set_salary($newSalary){
        if(!is_double($newSalary)){
            throw new Exception("Invalid type of argument");
        }
        $this->salary = $newSalary;
        return $this->name . "'s salary was updated to " . $this->salary;
    }
}