

<?php
// define variables and set to empty values
$fnameErr = $lnameErr = $admissionErr = $emailErr = $yearErr = $programmeErr = "";
$fname = $lname  = $admission= $email =$year = $programme = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "Please fill in your first name";
  } else {
    $fname = test_input($_POST["name"]);
    //A name should only contain letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed";
    }
    
  }
  if (empty($_POST["lname"])) {
    $lnameErr = "Please fill in your last name";
  } else {
    $lname = test_input($_POST["name"]);
    //A name should only contain letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed";
    }
    
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Please fill in your email";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["admission"])) {
    $admissionErr = "Your admission number is required";
  } else {
    $admission = test_input($_POST["admission"]);
  }
  
  if(empty($_POST["year"])){
      $yearErr = "Enter the year you are in";
  }else{
      $year = test_input($_POST["year"]);
  }
  
  if(empty($_POST["programme"])){
      $programmeErr = "Select your programme";
  }else{
      $programme = test_input($_POST["programme"]);
  }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


echo "<h2>Your Input:</h2>";
echo $fname;
echo "<br>";
echo $lname;
echo "<br>";
echo $email;
echo "<br>";
echo $admission;
echo "<br>";
echo $year;
echo "<br>";
echo $programme;
echo "<br>";


?>
<html>
    <head>
        <title>Student Registration Form</title>
    </head>
    <body>
         <div id="wrap">
            <form method="POST" action="formValidator.php">
                <div>
                    <div class="cont_details">
                        <fieldset>
                            <legend>Fill in your Student details!</legend>
                            
                            <div class="field_container">
                                <label for="fname">First Name</label>
                                <input type="text" id="fname" name="First Name"
                                       value="<?php echo htmlentities($fname); ?>" />
                                       
                                       <span class="error"><?php echo $fnameErr; ?></span>
                                <br>
                                <label for="lname">Last name</label>
                                <input type="text" id="lname" name="Last Name"
                                       value="<?php echo htmlentities($lname); ?>" />
                                
                                       <span class="error"><?php echo $lnameErr; ?></span>
                                <br>
                                <label for="admission">Admission Number</label>
                                <input type="text"  id="admission" name="admission"
                                       value="<?php echo htmlentities($admission);?>" />
                                
                                       <span class="error"><?php echo $admissionErr; ?></span>
                                <br>
                                <label for="year">Year</label>
                                <input type="text" id="year"  name="year"
                                       value="<?php echo htmlentities($year);?>" />
                                
                                       <span class="error"><?php echo $yearErr; ?></span>
                                <br>
                            </div>
                            <div class="field_container">
                                <label>Programme</label>
                                       <span class="error"><?php echo $programmeErr; ?></span>
                                       <select id="programme" name="programme">
                                           <option value="">Select Programme</option>
                                           <option><?php echo $programme=='Informatics'?'selected':'';?>Informatics</option>
                                           <option><?php echo $programme=='Surveying'?'selected':'';?>Surveying</option>
                                           <option><?php echo $programme=='Engineering'?'selected':'';?>Engineering</option>
                                       </select>
                            </div>
                            
                            <input type="submit"  name="Submitted" value="submit" id="submit">
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>