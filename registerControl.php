<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nameErr = $emailErr = $passErr = "";
$name = $email = $pass = "";

function test_input($data){
    $data= trim($data);
    $data= stripslashes($data);
    $data= htmlspecialchars($data);
    return $data;
}

if ($_SERVER("REQUEST_METHOD")==POST){
    if(empty($_POST["name"])){
        $nameErr = "Name is required";
    }else{
        $name= test_input($_POST["name"]);
    }
    
    //A name should only have letters and white space
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
    
    if (empty($_POST["email"])){
        $emailErr = "Email is required";
    }else {
        $email= test_input($_POST["email"]);
    }
    //checking email
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $emailErr="Invalid email format";
    }
    
    if (empty($_POST["pass"])){
        $passErr="Password is required";
    }
}

if (!empty($name) && !empty($email) && !empty($pass)){
    echo "$name";
    echo "<br>";
    echo "$email";
    echo "<br>";
    echo "$pass";
    echo "<br>";
    $sql = "INSERT INTO registers(name,email,pass)
            VALUES = ('$name','$email','$pass')";
    
    if ($conn->query($sql)== true){
        echo "New record created successfully";
    }else {
        echo " Error: ". "$sql". "<br>" . $conn->error;
    }
    
    
    $conn->close();
}