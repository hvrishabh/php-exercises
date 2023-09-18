<?php

// for ($i = 1; $i <= 6; $i++) {
//     for ($j = 1; $j < 6; $j++) {
//         echo $i . "*" . $j . " = " . $i * $j . "&nbsp;";
//     }
//     echo "<br>";
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table align="left" border="1px" cellpadding="3px" cellspacing="0">
<?php
for ($i = 1; $i <= 6; $i++) {
    echo "<tr>";
    for ($j = 1; $j < 6; $j++) {
        echo "<td> $i*$j = " . $i + $j . "</td>";
    }
    echo "</tr>";
}
?>
    </table>
</body>
</html>

