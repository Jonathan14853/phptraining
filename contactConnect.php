<?php

 $host="localhost";
 $user="root";
 $password="";
 $database="contacts";
 
 $conn=new mysqli($host,$user,$password,$database);
 
 if($conn->connect_error){
     echo "Connection failed";
 }else{
     echo "Connection successfull";
 }
