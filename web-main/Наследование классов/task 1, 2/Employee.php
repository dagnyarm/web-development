<?php

class Employee extends User{
    public function set_age($newAge){
        if(!is_int($newAge)){
            throw new Exception("Invalid type of argument");
        }
        if($newAge < 18 || $newAge > 65){
            throw new Exception("Argument out of range. Must be > 18 and < 65");
        }
        $this->age = $newAge;
        return $this->name . "'s age was updated to " . $this->age;
    }
}