<?php

class Vechile {
    private $brand;
    private $model;
    private $year;

    public function __construct(string $brand, string $model,float $year){
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;

    }
    public function VechileDetails(){

        return "The brand of vechile is : " . $this->brand . " with Model name : " . $this->model . " released in year : " . $this->year;
    }
}

$obj1 = new Vechile("yahma", "fz", 3000);
echo $obj1->VechileDetails();