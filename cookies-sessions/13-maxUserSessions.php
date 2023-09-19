<?php

session_save_path('C:\xampp\htdocs\php-exercises\cookies-sessions');
session_start();

$maxSessions = 3;

if(!isset($_SESSION['session_count'])){
    $_SESSION['session_count'] = 1;

}else{
    $_SESSION['session_count']++;

    if($_SESSION['session_count'] > $maxSessions){
        session_unset();
        session_destroy();
        echo "Maximum session limit exceeded. Please log in again.";
        exit;
    }
}
echo "<br>Session active. Session count: " . $_SESSION['session_count'];