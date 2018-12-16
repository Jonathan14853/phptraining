<?php
// define variables and set to empty values

$firstNameErr = $lastNameErr = $yeaar= $courseErr = $genderErr = "";
$firstName = $lastName = $yeaar  = $course = $gender = "";
$error=array(
    'firstName'=>'',
    'lastName'=>'',
    'yeaar'=>'',
    'course'=>'',
    'gender'=>''
);

switch ($_POST['action']) {
    case "create":
        $error=createStudents($conn);
        break;
    case "update":
        $id=$_POST['id'];
        updateStudents($conn, $id);
        break;
    case 'update':
        break;

    default:
        break;
}

function createStudents($conn)
{
  if (empty($_POST["firstName"])) {
    $error['firstName'] = "Please fill in your first name";
  } else {
    $firstName = test_input($_POST["firstName"]);
    //A name should only contain letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
      $error['lastName'] = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["lastName"])) {
    $error['lastName'] = "Please fill in your  last name";
  } else {
    $lastName = test_input($_POST["lastName"]);
    //A name should only contain letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
      $error['lastName'] = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["yeaar"])) {
    $error['yeaar'] = "Please fill in your year of study";
  } else {
   $yeaar = test_input($_POST['yeaar']);
  }
    
  if (empty($_POST["course"])) {
    $error['course'] = "Course is required";
  } else {
    $course = test_input($_POST["course"]); 
  }
  if (empty($_POST["gender"])) {
    $error['gender'] = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }



if(!empty($firstName) && !empty($lastName) && !empty($yeaar) && !empty($course)&& !empty($gender)){
    
    $sql = "INSERT INTO students(firstName,lastName,yeaar,course,gender) VALUES('$firstName','$lastName','$yeaar','$course','$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //$conn->close();

    }
    return $error;
    }

    function getStudents($conn)
    {
        $data= mysqli_query($conn, "SELECT * FROM students");
        return $result= mysqli_fetch_all($data,MYSQLI_ASSOC);

    }
    function updateStudents($conn,$id)
    {
        mysqli_query($conn, "UPDATE  students WHERE id=$id");
        //$conn->close();
    }
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
}
