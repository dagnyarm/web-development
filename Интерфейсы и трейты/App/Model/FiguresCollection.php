<?php

require_once __DIR__ . '/../Contracts/IFigure.php';
class FiguresCollection{
    private $figures = [];
    public function add(iFigure $figure){
        $this->figures[] = $figure;
    }

    public function getTotalSquare(){
        $sum = 0;
        foreach ($this->figures as $figure) {
            $sum += $figure->getSquare(); // используем метод getSquare
        }
        return $sum;
    }
}
