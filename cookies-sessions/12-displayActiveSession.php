<?php

// Set the session save path
$sessionSavePath = session_save_path('C:\xampp\htdocs\php-exercises\cookies-sessions');
// session_start();


// Get all the session files in the save path directory
$sesssionFiles = glob('C:\xampp\htdocs\php-exercises\cookies-sessions\sess_vnsutgh6h1pfj40af465sdodv9');

// Initalize the session counter
$activeSessions = 0;

// Iterate through the session files

foreach($sesssionFiles as $sessionFile){
    print_r(is_file($sessionFile)  );

    echo "<br>";
    print_r(filemtime($sessionFile));
    // echo "<br>";
    // print_r(ini_get('session.gc_maxlifetime'));
    echo "<br>";
    print_r(time());
    echo "<br>";
    print_r((filectime($sessionFile)+ ini_get('session.gc_maxlifetime')));
    echo "<br>";
    // check if the session file is valid
    if(is_file($sessionFile)  && filemtime($sessionFile)+ ini_get('session.gc_maxlifetime') > time()){
        $activeSessions++;

    }
}
echo "Number of active sessions: " . $activeSessions;