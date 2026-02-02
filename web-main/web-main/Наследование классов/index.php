<?php

require_once "task 3/City.php";
require_once "task 3/Employe.php";
require_once "task 3/User1.php";

$city1 = new City("city 1", 34000);
$city2 = new City("city 2", 56000);
$city3 = new City("city 3", 67000);

$emp1 = new Employe("emp 1", "surname", 1000.00);
$emp2 = new Employe("emp 2", "surname", 2000.00);
$emp3 = new Employe("emp 3", "surname", 3000.00);


$user1 = new User1("user 1", "surname");
$user2 = new User1("user 2", "surname");
$user3 = new User1("user 3", "surname");

$arr = [$city1, $emp1, $user1, $city2, $emp2, $user2, $city3, $emp3, $user3];

foreach($arr as $item){
    if($item instanceof User1){
        echo $item->get_name() . "<br>";
    }
}

