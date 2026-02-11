<?php

require_once __DIR__ . '/../Contracts/iCube.php';

class Cube implements iCube {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function getVolume() {
        return $this->side ** 3;
    }

    public function getSurfaceArea() {
        return 6 * ($this->side ** 2);
    }
}