<?php
    $host="localhost";
    $user="admin";
    $pass="password";
    $db="register";
    
    $conn = new mysqli($host,$user,$pass,$db);
    
    //checking connection
    
    if($conn->connect_error){
        echo "Connection failed";
    }else{
        echo "Connection successful";
    }
?>