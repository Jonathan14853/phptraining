<?php

    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $db="jonathan";
    
    $conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
    
    // checking connection
    if ($conn->connect_error){
        echo "Connection failed";
    }else{
       // echo "Connection was successfull";
    }
?>