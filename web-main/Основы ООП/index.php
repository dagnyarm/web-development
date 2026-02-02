<?php
require_once "src/Employee.php";
require_once "src/Rectangle.php";

try{
    $emp = new Employee('John', 25, 1000.00);
    $emp2 = new Employee('Eric', 26, 2000.00);
    $rectangle = new Rectangle(12, 2);

    // Сумма зп 

    echo $emp->salary + $emp2->salary;
    echo '<br>';

    // Сумма возрастов

    echo $emp->age + $emp2->age;
    echo '<br>';

    // методы класса Employee

    //get name, age, salary

    echo $emp->get_name();
    echo '<br>';
    echo $emp->get_age();
    echo '<br>';
    echo $emp->get_salary();
    echo '<br>';
    //check 18
    if($emp->check_age()){
        echo $emp->get_name() . ' is over 18';
    }
    else{
        echo $emp->get_name() . ' is not over 18';
    }
    echo '<br>';

    //set age

    echo $emp2->set_age(18);
    echo '<br>';


    // методы класса Rectangle

    echo $rectangle->get_square();
    echo '<br>';
    echo $rectangle->get_perimeter();

} catch(Exception $e){
    echo $e->getMessage();
    echo '<br>';
}



