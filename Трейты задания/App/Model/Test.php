<?php

require_once __DIR__ . '/../Trait/Trait1.php';
require_once __DIR__ . '/../Trait/Trait2.php';
require_once __DIR__ . '/../Trait/Trait3.php';

class Test {
    // Подключаем все три магические силы сразу
    use App\Trait\Trait1, App\Trait\Trait2, App\Trait\Trait3;

    public function getSum() {
        // Складываем результаты методов, которые пришли из разных трейтов
        return $this->getNum1() + $this->getNum2() + $this->getNum3();
    }
}