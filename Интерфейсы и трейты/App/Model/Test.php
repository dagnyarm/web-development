<?php

require_once __DIR__ . '/../Trait/TestTrait.php';
class Test{
    use TestTrait {
        TestTrait::method as public;
    }
}