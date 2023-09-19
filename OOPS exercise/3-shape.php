<?php

abstract class Shape{
    protected $base;
    protected $height;
    public function __construct($base, $height){
        $this->base = $base;
        $this->height = $height;
    }
    public abstract function calculateArea();
}

class Triangle extends Shape{
    public function calculateArea(){
        return 0.5 * ($this->base) * ($this->height);
    }
}
class Rectangle extends Shape{
    public function calculateArea(){
        return  ($this->base) * ($this->height);
    }
}

$areaT = new Triangle(4, 4);
$areaR = new Rectangle(4, 4);
echo $areaT->calculateArea();
echo "<br>";
echo $areaR->calculateArea();

