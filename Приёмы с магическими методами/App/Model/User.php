<?php

class User {
    private $name;
    private $surn;
    private $age;

    public function __construct($name, $surn, ?int $age = null) {
        $this->name = $name;
        $this->surn = $surn;
        $this->age = $age;
    }

    public function __toString() {
        return $this->name . ' ' . $this->surn;
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return "Свойство '$property' не найдено";
    }

    public function __set($property, $value) {
        if ($property === 'age') {
            if ($value >= 0 && $value <= 70) {
                $this->age = $value;
            }
        } else {
            if (property_exists($this, $property)) {
                $this->$property = $value;
            }
        }
    }
}