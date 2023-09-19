<?php
class myException extends Exception{
function errorMessage(){
        $error = "My Exception message " . $this->getMessage() .
            "<br> Error on line no. : " . $this->getLine() ."<br> Error code is : " .$this->getCode();

        return $error;
}
}

function division($denominator,$numberator = 100)
{
    try {
        // code that may throw an exception
        // $numberator = 100;
        // $denominator = 0;

        if ($denominator === 0) {
            throw new Exception("Division by zero is not allowed.");
        }
        if($denominator === 3){
            throw new myException('demominator is 3333333333333 <br>');
        }
        $result = $numberator / $denominator;
        echo "Result: " . $result;

    }
    // catch (Exception $e) {
    //     // Exception handling code
    //     echo "An error occurred : " . $e->getMessage();
    //     echo "<br>";
    //     echo "getLine : " . $e->getLine();
    //     echo "<br>";
    //     echo "get FIle: " . $e->getFile();
    //     echo "<br>";
    //     echo "Get COde : " . $e->getCode();
    //     echo "<br>";
    // }
    catch (myException $e1) {
        echo "<hr>";
        echo $e1->errorMessage();
        echo "<hr>";
    }
    finally{
        echo "<br>Finally is always called.";
    }
}


// division(0,100);
// echo "<hr>";
// division(50,2);
// echo "<hr>";
// division(5);
echo "<hr>";
division(3,300);