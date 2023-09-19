<?php
$arra = array("uglify-js" => "1.3.4", "jshint" => "0.9.1", "recess" => "1.1.8", "connect" => "2.1.3", "hogan.js" => "2.0.0");
$myarray = array('red', 'green', 'white');
echo "<pre>";
//  var_dump(json_encode($arra));



print_r($arra);
echo "<br>";
echo "<br>";
echo "<br>";
print_r(json_encode($arra));
$test = (json_encode($arra));
echo "<br>";
echo "<br>";
echo "<br>";

print_r(json_decode($test));
echo "<br>";
echo "<br>";
echo "<br>";
print_r(json_decode($test,true));


echo "<br> <hr>";
// .......................................

print_r($myarray);
echo "<br>";
echo "<br>";
echo "<br> Encoded one is below ---------<br>";
print_r(json_encode($myarray));
$test = (json_encode($myarray));
echo "<br>";
echo "<br>";
echo "<br>";

print_r(json_decode($test));
echo "<br>";
echo "<br>";
echo "<br>";
print_r(json_decode($test,true));