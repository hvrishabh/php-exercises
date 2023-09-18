<?php

// $n = 5;
// $fact = 1;
// for ($i = 1; $i <= $n-1; $i++) {
//     $fact = $fact * ($i+ 1);
// }
// echo $fact;

function factorial($n){
    if($n <2){
        return 1;
    }else{
        return ($n * factorial($n - 1));
    }

}

echo factorial(4);

