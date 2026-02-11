<?php

require_once __DIR__ . '/../Contracts/iEmployee.php';
require_once __DIR__ . '/User.php';

class Employee extends User implements iEmployee {
    private $salary;

    public function getSalary() { 
        return $this->salary; 
    }
    public function setSalary($salary) { 
        $this->salary = $salary; 
    }
}