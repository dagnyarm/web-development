<?php
interface IUser{
    public function __construct($name, $age);
    public function setName ($name); 
    public function getName(); 
    public function setAge ($age); 
    public function getAge(); 
}

