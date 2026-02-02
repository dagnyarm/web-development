<?php

class Rectangle{
    public $width;
    public $height;

    public function __construct($width, $height){
        if($this->validate_param($width)){
            $this->width = $width;
        }
        if($this->validate_param($height)){
            $this->height = $height;
        }
        if(empty($this->width) || empty($this->height)){
            throw new Exception("Invalid type of parameter");
        }
    }

    private function validate_param($param){
        if(is_int($param) || is_double($param) || is_float($param)){
            return true;
        }
        return false;
    }

    public function get_square(){
        return $this->width * $this->height;
    }

    public function get_perimeter(){
        return $this->width * 2 + $this->height * 2;
    }
}