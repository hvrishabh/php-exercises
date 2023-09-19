<?php

session_save_path('C:\xampp\htdocs\php-exercises\cookies-sessions');
session_start();

if (isset($_SESSION['lastAccessTime'])) {
    $lastAccessTime = $_SESSION['lastAccessTime'];
    echo "The last access time: " . date('Y-m-d H:i:s', $lastAccessTime);
    $_SESSION['lastAccessTime'] = time(); // Update the last access time
} else {
    $_SESSION['lastAccessTime'] = time();
    echo "Session started. First access .";
}
