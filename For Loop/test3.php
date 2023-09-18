<?php

// Simple Pyramid
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

// Reverse Pyramid

for ($i = 0; $i <= 5; $i++) {
    for ($j = 5 - $i; $j >= 0; $j--) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

// PHP code to display square pattern program using stars:
$m = 1;
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $m . " ";
    }
    $m = $m + 1;
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

// PHP code to display left-aligned pyramid pattern using numbers in series:
$a = 1;
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $a . " ";
        $a = $a + 1;
    }
    echo "<br/>";
}

echo "<br>";
echo "<br>";
echo "<br>";

// PHP code to display left-aligned pyramid pattern using letter:

$b = 65; /*Initializing ASCII value of (A) */
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo chr($b) . " ";
    }
    $b = $b + 1;
    echo "<br/>";
}
// A
// B B
// C C C
// D D D D
// E E E E E

// Triangle Pyramid
echo "<br/>";
echo "<br/>";
echo "<br/>";

//         *
//       *  *
//     *  *  *
//   *  *  *  *
// *  *  *  *  *

//Star Pyramid Size
$size = 5;
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5 - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "*&nbsp;&nbsp;";
    }
    echo "<br />";
}
