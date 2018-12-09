<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// define variables and set to empty values
$custom_nameErr = $custom_emailErr = $custom_genderErr = $custom_numErr = "";
$custom_name = $custom_email = $custom_gender = $custom_num = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["custom_name"])) {
    $custom_nameErr = "Please fill in your name";
  } else {
    $custom_name = test_input($_POST["custom_name"]);
    //A name should only contain letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$custom_name)) {
      $custom_nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["custom_email"])) {
    $custom_emailErr = "Please fill in your email";
  } else {
    $custom_email = test_input($_POST["custom_email"]);
    // check if e-mail address is well-formed
    if (!filter_var($custom_email, FILTER_VALIDATE_EMAIL)) {
      $custom_emailErr = "Invalid email format";
    }
  }
   if (empty($_POST["custom_num"])) {
    $custom_num = "";
  } else {
    $custom_num = test_input($_POST["custom_num"]);
  }
  if (empty($_POST["gender"])) {
    $custom_genderErr = "Gender is required";
  } else {
    $custom_gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(!empty($custom_name) && !empty($custom_email) && !empty($custom_num) && !empty($gender))
{
   echo "<h2>Your Input:</h2>";
echo $custom_name;
echo "<br>";
echo $custom_email;
echo "<br>";
echo $custom_num;
echo "<br>";
echo $custom_gender; 
$sql = "INSERT INTO customers (custom_name,custom_email,custom_num,gender)
VALUES ('$custom_name', '$custom_email','$custom_num','$custom_gender')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
