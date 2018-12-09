<?php


$firstNameErr="";
$lastNameErr="";
$studentIdErr="";
$yeaarErr="";
$courseErr="";
$genderErr;

$firstName="";
$lastName="";
$studentId="";
$yeaar="";
$course="";
$gender="";

function test_input($data){
       $data= trim($data);
       $data= stripcslashes($data);
       $data= htmlspecialchars($data);
       return $data;
   }

if($_SERVER["REQUEST_METHOD"]== "POST"){
    if(empty($_POST("firstName"))){
        $firstNameErr = "Please enter your first name";
    }else {
        $firstName = test_input($_POST["firstName"]);
    }
    //A name should only contain letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
      $firstNameErr = "Only letters and white space allowed";
    }
    
    if(empty($_POST("lastName"))){
      $lastNameErr = "Please enter your last name";
    }else {
    $lastName = test_input($_POST["lastName"]);
    }
    //A name should only contain letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
      $lastNameErr = "Only letters and white space allowed";
    }
    
    if(empty($_POST("studentId"))){
        $studentIdErr = "Please enter your student id";
    }else{
        $studentId= test_input($_POST["$studentId"]);
    }
    
    if(empty($_POST("yeaar"))){
        $yeaarErr = "Please enter your year of study";
    }else{
        $yeaar= test_input($_POST["yeaar"]);
    }
    if(empty($_POST("course"))){
        $courseErr="Please enter your programme";
    }else{
        $course=test_input($_POST["course"]);
    }
    if(empty($_POST("gender"))){
        $genderErr="Please select your gender";
    }else{
        $gender=test_input($_POST["gender"]);
    }
}  
   if(!empty($firstName) && !empty($lastName) && !empty($studentId) && !empty($yeaar) && !empty($course) && !empty($gender)){
       echo $firstName;
       echo "<br>";
       echo $lastName;
       echo "<br>";
       echo $studentId;
       echo "<br>";
       echo $yeaar;
       echo "<br>";
       echo $course;
       echo "<br>";
       echo $gender;
   
       $sql = "INSERT INTO studentDetails(firstName,lastName,studentId,yeaar,course)
               VALUES ('$firstName', '$lastname',$studentId,$yeaar,'$course','$gender')";

       if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
       } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
       }

       $conn->close();
  }

