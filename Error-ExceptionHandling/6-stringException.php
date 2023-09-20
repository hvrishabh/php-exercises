<?php
function validateString($inputString){
    if(empty($inputString)){
        throw new ErrorException("string should not be empty.");

    }
}

try{
    $string = "";
    validateString($string);
    echo "Valid String: " . $string;
}catch(ErrorException $e){
    echo "An error occurred: " . $e->getMessage();
}