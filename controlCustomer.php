<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// define variables and set to empty values

$customer_nameErr = $customer_emailErr = $customer_numErr= $gender= "";
$customer_name = $customer_email = $customer_num  = $gender = "";
$error=array(
    'customer_name'=>'',
    'customeremail'=>'',
    'customer_num'=>'',
    'gender'=>''
);

switch ($_POST['action']) {
    case "create":
        $error=createCustomers($conn);
        break;
    case "delete":
        $id=$_POST['id'];
        deleteCustomers($conn, $id);
        break;
    case 'update':
        break;

    default:
        break;
}

function createCustomers($conn)
{
  if (empty($_POST["customer_name"])) {
    $error['customer_name'] = "Please fill in your name";
  } else {
    $customer_name = test_input($_POST["customer_name"]);
    //A name should only contain letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$customer_name)) {
      $error['customer_name'] = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["customer_email"])) {
    $error['customer_email'] = "Please fill in your email";
  } else {
    $customer_email = test_input($_POST["customer_email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error['customer_email'] = "Invalid email format";
    }
  }
    
  if (empty($_POST["customer_num"])) {
    $error['customer_num'] = "Customer Numbser is required";
  } else {
    $customer_num = test_input($_POST["customer_num"]);  
  }
  if (empty($_POST["gender"])) {
    $error['gender'] = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }



if(!empty($customer_name) && !empty($customer_email) && !empty($customer_num) && !empty($gender))
{
$sql = "INSERT INTO customers (customer_name,customer_email,customer_num,gender)
VALUES ('$customer_name', '$customer_email',$customer_num,'$gender')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//$conn->close();

}
return $error;
}

function getCustomers($conn)
{
    $data= mysqli_query($conn, "SELECT * FROM customers");
    return $result= mysqli_fetch_all($data,MYSQLI_ASSOC);

}
function deleteCustomers($conn,$id)
{
    mysqli_query($conn, "DELETE  FROM customers WHERE id=$id");
    //$conn->close();
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
