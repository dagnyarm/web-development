<?php

require_once __DIR__ . '/../Trait/Helper.php';

class City {
    use App\Trait\Helper;

    private $population;

    public function __construct($name, $age, $population) {
        $this->name = $name;
        $this->age = $age;
        $this->population = $population;
    }

    public function getPopulation() {
        return $this->population;
    }
}