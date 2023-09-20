<?php

try{
    $number = "";

    if(!is_numeric($number)){
        throw new InvalidArgumentException(" Invalid Number.");
    }

    $result = 100 / $number;
    echo  $result;
}catch(InvalidArgumentException $e){
    echo "InvalidArgumentException : " . $e->getMessage();
}catch(DivisionByZeroError $e){
    echo "Divison by zeroError: " . $e->getMessage();
}catch(Throwable $e){
    echo "An error occurred: " . $e->getMessage();
}
