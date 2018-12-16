<?php
// define variables and set to empty values

$nameErr = $emailErr = $passwordErr = "";
$name = $email = $password = "";
$error=array(
    'name'=>'',
    'email'=>'',
    'password'=>''
);

switch ($_POST['action']) {
    case "create":
        $error=createRegister($conn);
        break;
    case "update":
        $id=$_POST['id'];
        updateRegister($conn, $id);
        break;
    case 'update':
        break;

    default:
        break;
}

function createRegister($conn)
{
  if (empty($_POST["name"])) {
    $error['name'] = "Please fill in your name";
  } else {
    $name = test_input($_POST["name"]);
    //A name should only contain letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $error['name'] = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $error['email'] = "Please fill in your email";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error['email'] = "Invalid email format";
    }
  }
    
  if (empty($_POST["password"])) {
    $error['password'] = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    }    



if(!empty($name) && !empty($email) && !empty($password))
{
$sql = "INSERT INTO registers (name,email,password)
VALUES ('$name', '$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//$conn->close();

}
return $error;

}
function getRegister($conn)
{
    $data= mysqli_query($conn, "SELECT * FROM registers");
    return $result= mysqli_fetch_all($data,MYSQLI_ASSOC);

}
function updateRegister($conn,$id)
{
    mysqli_query($conn, "UPDATE  registers WHERE id=$id");
    //$conn->close();
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
