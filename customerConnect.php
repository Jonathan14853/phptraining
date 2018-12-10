<?php

    $dbhost="localhost";
    $dbuser="admin";
    $dbpass="password";
    $db="customer";
    
    $conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
    
    // checking connection
    if ($conn->connect_error){
        echo "Connection failed";
    }else{
       // echo "Connection was successfull";
    }
?>