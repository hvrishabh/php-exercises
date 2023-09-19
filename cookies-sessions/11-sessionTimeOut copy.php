<?php

session_save_path('C:\xampp\htdocs\php-exercises\cookies-sessions');
session_start();

//  Setting session TimeOut
$sessionTimeOut = 18000;

if(isset($_SESSION['LAST_ACTIVITY1'])){
    $currentTime = time();
    $lastActivity = $_SESSION['LAST_ACTIVITY1'];
    $TimeSinceLastActivity = $currentTime - $lastActivity;
    if($TimeSinceLastActivity > $sessionTimeOut){
        session_unset();
        session_destroy();
        echo "Session expired. Please log in again.";
    }else{
        $_SESSION['LAST_ACTIVITY1'];
        echo "Session is Active.";
    }
}else{
    $_SESSION['LAST_ACTIVITY1'] = time();
    echo "session started.";
}

// session_save_path('C:\xampp\htdocs\php-exercises\cookies-sessions');
// session_start();

// // setting session TimeOut

// $sessionTimeout = 1800; // 30min

// // check if session has already been started and calculate the time since the last acitivity

// if (isset($_SESSION['LAST_ACTIVITY1'])) {
//     $lastActivity = $_SESSION['LAST_ACTIVITY'];
//     $currentTime = time();
//     $timeSinceLastActivity = $currentTime - $lastActivity;

//     if ($timeSinceLastActivity > $sessionTimeout) {
//         session_unset();
//         session_destroy();
//         echo "Session expired. Please log in again.";

//     } else {
//         //Update the last activity time
//         $_SESSION['LAST_ACTIVITY'] = $currentTime;
//         echo "Session Active. ";
//     }
// } else {
//     // set the last activity time for the session
//     $_SESSION['LAST_ACTIVITY'] = time();
//     echo "Session Started. ";
// }
