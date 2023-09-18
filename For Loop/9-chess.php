<?php
echo "<table style='border:20px double orange;>";
for ($i = 1; $i <= 8; $i++) {
    echo "<tr '>";
    for ($j = 1; $j <= 8; $j++) {
        if (($i + $j) % 2 == 0) {
            echo "<td  style='border:20px solid black;background:black;color:white'></td>";
        } else {
            echo "<td style='border:20px solid white; background:white'> </td>";
        }

    }
    echo "</tr>";
    // echo "<br>";
}
echo "</table>";
