<?php

require_once __DIR__ . '/../Trait/Helper1.php';
require_once __DIR__ . '/../Trait/Helper2.php';
class User{
    use Helper1, Helper2; 
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}
