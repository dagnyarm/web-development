<?php
interface iRectangle extends iFigure{
    public function __construct($a, $b); // конструктор с двумя параметрами
    public function getSquare();
    public function getPerimeter();
}
