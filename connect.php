<?php


    DEFINE ('DB_USER', 'admin');
    DEFINE ('DB_PSWD', 'password');
    DEFINE ('DB_HOST', 'jonathan.com');
    DEFINE ('DB_NAME', 'employee');
    
    
    $dbcon = new mysqli(DB_USER,DB_PSWD,DB_HOST,DB_NAME);
    
    if(!$dbcon){
        die('error connecting to database');
    }
    
    echo "Connection was successful";
    
?>
