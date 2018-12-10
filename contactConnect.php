<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.*/
 $host="localhost";
 $user="admin";
 $password="password";
 $database="contacts";
 
 $conn=new mysqli($host,$user,$password,$database);
 
 if($conn->connect_error){
     echo "Connection failed";
 }else{
     echo "Connection successfull";
 }
