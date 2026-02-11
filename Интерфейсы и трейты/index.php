<?php

require_once 'app/Model/FiguresCollection.php';
require_once 'app/Model/Quadrate.php';
require_once 'app/Model/RectangleFigure.php';
require_once 'app/Model/User.php';
require_once 'app/Model/Test.php';

$figuresCollection = new FiguresCollection();
// Добавим парочку квадратов:
$figuresCollection->add(new Quadrate(2));
$figuresCollection->add(new Quadrate(3));
// Добавим парочку прямоугольников:
$figuresCollection->add(new RectangleFigure(2, 3));
$figuresCollection->add(new RectangleFigure(3, 4));

$quadrate = new Quadrate(4);
var_dump($quadrate instanceof Quadrate); // выведет true
echo "<br>";
var_dump($quadrate instanceof iFigure); // выведет true
echo "<br>";

$user = new User('john', 30);
echo $user->getName(); // выведет 'john'
echo "<br>";
echo $user->getAge(); // выведет 30
echo "<br>";

$test = new Test;
echo $test->method(); // выведет '!!!'