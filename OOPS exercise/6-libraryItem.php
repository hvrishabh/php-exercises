<?php

class hierarchy {
    private $h1;
    private function f1(){
        echo "THis is function f1 <br>";
    }

    public function f2($h1){
        $this->h1 = $h1;
        echo "This is function f2 with name " . $h1 . " and it carries function 1 also <br> " ;
        echo $this->f1();

    }
}

// abstract class LibraryItem{
//     protected $h2;

//     protected abstract function a1($h3);

// }

// class Book extends LibraryItem{
//     public function __construct($h2){
//         $this->h2 = $h2;
//     }

//     public function a1($h3){
//         echo "the variable of constructor is " . $this->h2. "<br>";
//         echo "the variable of a1 function is " . $h3;


//     }

// }
// class DVD {

// }

$obj1 = new hierarchy;
$obj1->f2("..............h1-test........");

echo "<hr>";
// $obj2 = new Book(".....h2-test.............");
// $obj2->a1("..............h3-test................");