<?php

$r_count = 0;

$word = "w3resorrruce";

for($i= 0; $i<strlen($word) ;$i++ ){
    if($word[$i] == "r" ){
        $r_count++;

    }
}
echo $r_count;