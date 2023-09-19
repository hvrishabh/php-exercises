<?php

class Student{
    public $name;
    public $age;
    public $grade;

    public function info(){
        echo $this->name  . "<br>";
        echo $this->age  . "<br>";
        echo $this->grade ."<br>";
    }

}

$obj1 = new Student;
$obj1->name = "Hitesh";
$obj1->age = "27";
$obj1->grade = "Soft Engg";
$obj1->info();

