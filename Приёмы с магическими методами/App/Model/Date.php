<?php

class Date {
    public $year;
    public $month;
    public $day;

    public function __construct($year, $month, $day) {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
    }

    public function __get($property) {
        if ($property === 'weekDay') {
            $date = "{$this->year}-{$this->month}-{$this->day}";
            return date('l', strtotime($date));
        }
        return "Свойство {$property} не существует";
    }
}