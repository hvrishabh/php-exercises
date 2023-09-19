<?php

class customException extends Exception
{
    public function errorMessage()
    {
        $error = "My Exception message " . $this->getMessage() .
        "<br> Error on line no. : " . $this->getLine() . "<br> Error code is : " . $this->getCode();

        return $error;
    }
}
// class customException extends Exception{
//     public function __construct($message,$code = 0, Throwable $previous = null){
//         parent::__construct($message, $code, $previous);
//     }
//     public function __toString(){
//         return __CLASS__ . ": [{$this->code}]: {$this->message}<br>";
//     }
// }

try {
    // code that throw a custom exception.

    $roll_no = -15;

    if ($roll_no < 0) {
        throw new customException("roll no can not be negative .");
    }
    echo "Roll no : " . $age;

} catch (customException $e) {
    echo "An error occurred: " . $e->getMessage();
}
