<?php

try{
    $num = 0;

    if($num == 0){
        throw new Exception("Number is not valid");
    }
}
catch(Exception $e){
    echo $e->getMessage();
}finally{
    echo " <br>The code of Finally Block. ";
}