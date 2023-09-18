<?php

$first = 0;
$second = 1;
$n = 10;

for($i = 2; $i< $n ; $i++){
    $next_num = $first + $second;
    echo " $next_num, ";
    $first = $second;
    $second = $next_num;
}
echo "<br>";echo "<br>";echo "<br>";


function fibonacci($n, $first = 0,$second =1){
    if($n ==0){
        return;
    }
    echo $first . ",";
    $next = $first + $second;
    fibonacci($n - 1, $second, $next);
}

$n = 10;
echo "Fibonacci Series : ";
fibonacci($n);