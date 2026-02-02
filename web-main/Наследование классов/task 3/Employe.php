<?php
require_once "User1.php";

class Employe extends User1{
    public $salary;

    public function __construct($name, $surname, $salary){
        parent::__construct($name, $surname);
        if(!is_double($salary)){
            throw new Exception("Salary must be type of double (0.00)");
        }

        $this->salary = $salary;
    }

    public function get_name_surname(){
        return $this->name . ' ' . $this->surname;
    }
}