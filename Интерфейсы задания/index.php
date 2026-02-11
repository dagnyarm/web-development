<?php

require_once 'App/Model/Disk.php';
require_once 'App/Model/Cube.php';
require_once 'App/Model/User.php';
require_once 'App/Model/Employee.php';

$disk = new Disk(5);
echo $disk->getPerimeter() . "<br>";
echo $disk->getSquare() . "<br>";

$cube = new Cube(3);
echo $cube->getVolume() . "<br>";
echo $cube->getSurfaceArea() . "<br>";


$simpleUser = new User("Иван", 20);
echo $simpleUser->getName() . ", " . $simpleUser->getAge() . "<br>";
$simpleUser->setAge(21);
echo $simpleUser->getName() . ", " . $simpleUser->getAge() . "<br>";

$worker = new Employee("john", 30);
$worker->setSalary(50000);
echo $worker->getName() . "<br>";
echo $worker->getSalary();