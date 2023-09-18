<?php

for ($i = 0; $i < 50; $i++) {
    switch ($i) {
        case ($i % 3 == 0 && $i % 5 == 0):
            echo "FizzBuzz<br>";
            break;
        case ($i % 3 == 0):
            echo "Fizz <br>";
            break;
        case ($i % 5 == 0):
            echo "buzz<br>";
            break;

        default:
            echo $i . "<br>";

    }
}
