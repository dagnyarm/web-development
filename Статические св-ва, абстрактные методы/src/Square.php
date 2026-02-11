<?php

class Square extends Figure{
    public $side;
    public function __construct($side){
        $this->side = $side;
    }
    public function get_area(){
        return $this->side * $this->side;
    }

    public function get_perimeter(){
        return $this->side * 4;
    }
}