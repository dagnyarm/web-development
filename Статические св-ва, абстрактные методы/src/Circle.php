<?php

class Circle extends Figure{
    public $radius;
    private static $pi = 3.14;

    public function __construct($radius){
        $this->radius = $radius;
    }

    public function get_area(){
        return self::$pi * $this->radius * $this->radius;
    }

    public function get_perimeter(){
        return self::$pi * $this->radius * 2;
    }
}