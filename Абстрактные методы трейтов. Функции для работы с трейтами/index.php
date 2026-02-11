<?php
require_once "App/Trait/Trait2.php";

$traits = get_declared_traits();

echo "<ul>";
foreach ($traits as $traitName) {
    echo "<li>" . $traitName . "</li>";
}
echo "</ul>";

if (trait_exists('App\Trait\Trait2')) {
    echo "Трейт Trait2 Существует!<br>";
} else {
    echo "Трейт Trait2 Не найден.<br>";
}

$fakeTrait = 'App\Trait\Trait999';

if (trait_exists($fakeTrait)) {
    echo "Трейт {$fakeTrait} Существует!<br>";
} else {
    echo "Трейт {$fakeTrait} Не найден.<br>";
}