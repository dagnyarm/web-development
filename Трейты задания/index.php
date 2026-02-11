<?php

require_once 'App/Model/City.php';
require_once 'App/Model/Test.php';


$myCity = new City("Токио", 500, 14000000);
echo $myCity->getName() . "<br>";
echo $myCity->getAge() . "<br>";
echo $myCity->getPopulation() . "<br>";

$testObject = new Test();
echo $testObject->getSum(); 

$traits = get_declared_traits();

echo "<ul>";
foreach ($traits as $traitName) {
    echo "<li>" . $traitName . "</li>";
}
echo "</ul>";

if (trait_exists('App\Trait\Trait1')) {
    echo "Трейт Trait1 Существует!<br>";
} else {
    echo "Трейт Trait1 Не найден.<br>";
}

$fakeTrait = 'App\Trait\Trait999';

if (trait_exists($fakeTrait)) {
    echo "Трейт {$fakeTrait} Существует!<br>";
} else {
    echo "Трейт {$fakeTrait} Не найден.<br>";
}