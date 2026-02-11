<?php

require_once 'App/Model/User.php';
require_once 'App/Model/Date.php';


$user = new User('Иван', 'Иванов', 33);
echo $user . "<br>";

echo $user->name . "<br>"; 
echo $user->surn . "<br>"; 
echo $user->age . "<br>";

$myDate = new Date(2026, 2, 9);
echo $myDate->year . "<br>";
echo $myDate->weekDay . "<br>";

$user->age = 25;
echo $user->age . "<br>";

$user->age = 150; 
echo $user->age . "<br>";
$user->age = -5;
echo $user->age;