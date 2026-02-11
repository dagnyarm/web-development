<?php

class Rectangle extends Figure{
    public $x;
    public $y;
    public function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;
    }
    public function get_area(){
        return $this->x * $this->y;
    }

    public function get_perimeter(){
        return $this->x * 2 + $this->y * 2;
    }
}