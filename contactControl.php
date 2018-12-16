<?php
// define variables and set to empty values

$nameErr = $emailErr = $technologiesErr = "";
$name = $email = $technologies  ="";
$error=array(
    'name'=>'',
    'email'=>'',
    'technologies'=>'',
);

switch ($_POST['action']) {
    case "create":
        $error=createContact($conn);
        break;
    case "update":
        $id=$_POST['id'];
        updateContact($conn, $id);
        break;
    case 'update':
        break;

    default:
        break;
}

function createContact($conn)
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
    
  if (empty($_POST["technologies"])) {
    $error['technologies'] = "Select one technology";
  } else {
    $technologies = test_input($_POST["technologies"]);
  }



if(!empty($name) && !empty($email) && !empty($technologies))
{
$sql = "INSERT INTO contact(name,email,technologies)
        . VALUES('$name','$email','$technologies')";

if ($conn->query($sql) === TRUE) {
    echo "New Record set successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//$conn->close();

}
return $error;
}

function getContact($conn)
{
    $data= mysqli_query($conn, "SELECT * FROM contact");
    return $result= mysqli_fetch_all($data,MYSQLI_ASSOC);

}
function  updateContact($conn,$id)
{
    mysqli_query($conn, "UPDATE contact WHERE id=$id");
    //$conn->close();
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
