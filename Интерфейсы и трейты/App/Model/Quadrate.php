<?php 

require_once __DIR__ . '/../Contracts/IFigure.php';
require_once __DIR__ . '/../Contracts/iTetragon.php';
class Quadrate implements iFigure, iTetragon{
    private $a;
    public function __construct($a){
        $this->a = $a;
    }

    public function getA(){
        return $this->a;
    }
    public function getB(){
        return $this->a;
    }
    public function getC(){
        return $this->a;
    }
    public function getD(){
        return $this->a;
    }
    public function getSquare(){
        return $this->a * $this->a;
    }
    public function getPerimeter(){
        return 4 * $this->a;
    }
}