<?php
$json = '{"number": 123456789012345678901234567890}';
echo "<pre>";
var_dump(json_decode($json));

$test = print_r(json_decode($json,true));

print_r(json_encode($test));
?>