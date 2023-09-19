<?php

// Set the session save path

session_save_path('C:\xampp\htdocs\php-exercises\cookies-sessions');


$cookieName = "myCookie";
$value = "Cookie Value";

// set cookie
setcookie($cookieName, $value, time() + 3600);

// start session
session_start();

// set the session variable

$_SESSION[$cookieName] = $value;

// Display the cookie value
echo "cookie value : " . $_COOKIE[$cookieName];

echo "<br>";

echo "Session variable value : " . $_SESSION[$cookieName];