<?php
// define variables and set to empty values

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender  = $website = "";
$error=array(
    'name'=>'',
    'email'=>'',
    'gender'=>'',
    'website'=>''
);

switch ($_POST['action']) {
    case "create":
        $error=createPerson($conn);
        break;
    case "delete":
        $id=$_POST['id'];
        deletePerson($conn, $id);
        break;
    case 'update':
        break;

    default:
        break;
}

function createPerson($conn)
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
    
  if (empty($_POST["website"])) {
    $error['website'] = "Website is required";
  } else {
    $website = test_input($_POST["website"]);
    // used to check whether a url is valid.
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $error['email'] = "Invalid URL";
    }    
  }
  if (empty($_POST["gender"])) {
    $error['gender'] = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }



if(!empty($name) && !empty($email) && !empty($website) && !empty($gender))
{
$sql = "INSERT INTO person (name,email,gender,website)
VALUES ('$name', '$email',$gender,'$website')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//$conn->close();

}
return $error;
}

function getPerson($conn)
{
    $data= mysqli_query($conn, "SELECT * FROM person");
    return $result= mysqli_fetch_all($data,MYSQLI_ASSOC);

}
function deletePerson($conn,$id)
{
    mysqli_query($conn, "DELETE  FROM person WHERE id=$id");
    //$conn->close();
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
