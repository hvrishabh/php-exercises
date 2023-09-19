<?php
$json = '{

    "abc1":"123",
    "abc2":"124",
    "abc3":"125"
}';

echo "<pre>";
var_dump(json_decode($json));
echo "\n";
print_r(json_decode($json, true));