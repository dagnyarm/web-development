<?php

require_once "src/Num.php";
require_once "src/Num2.php";
require_once "src/Test1.php";
require_once "src/Test2.php";
require_once "src/Test.php";

Num::$num1 = 2;
Num::$num2 = 3;

echo Num::$num1 + Num::$num2 . "<br>";

$num2 = new Num2();
$num2->getSum();
echo "<br>";

$t11 = new Test1();
$t12 = new Test1();
$t13 = new Test1();
$t14 = new Test1();

$t21 = new Test2();
$t22 = new Test2();
$t23 = new Test2();
$t24 = new Test2();

$arr = [$t11, $t21, $t12, $t22, $t13, $t23, $t14, $t24];

foreach($arr as $item){
    echo get_class($item) . ' ' . $item::$name . "<br>";
}
echo "<br>";

$test = new Test();

$arr = get_class_methods($test);

foreach($arr as $item){
    $test->$item();
    echo "<br>";
}

$arr = get_class_vars('Test');
foreach($arr as $item){
    echo $item . "<br>";
}

