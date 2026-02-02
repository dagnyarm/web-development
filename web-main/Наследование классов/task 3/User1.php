<?php

class User1{
    public $name;
    public $surname;

    public function __construct($name, $surname){
        if(!is_string($name)){
            throw new Exception("Name must be type of string");
        }
        if(!is_string($surname)){
            throw new Exception("Surname must be type of string");
        }

        $this->name = $name;
        $this->surname = $surname;
    }

    public function get_name(){
        return $this->name;
    }

    public function set_name($name){
        $this->name = $name;
    }

    public function get_surname(){
        return $this->surname;
    }

    public function set_surname($surname){
        $this->surname = $surname;
    }
}