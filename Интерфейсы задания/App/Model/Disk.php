<?php
require_once __DIR__ . "/../Contracts/iFigure.php";

class Disk implements IFigure{
    public $radius;
    public function __construct(float $r){
        $this->radius = $r;
    }

    public function getPerimeter(){
        return M_PI * 2 * $this->radius;
    }

    public function getSquare(){
        return M_PI * ($this->radius ** 2);
    }
}