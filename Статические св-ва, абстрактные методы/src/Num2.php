<?php

class Num2{
    private static $num1 = 2;
    private static $num2 = 3;

    public function getSum(){
        echo self::$num1 + self::$num2;
    }
}