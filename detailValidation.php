<?php

// i first create variables and assign them empty values

$first_name = "";
$last_name = "";
$email = "";
$message = "";
$technologies;

$first_nameErr="";
$last_nameErr="";
$emailErr="";
$messageErr="";
$fileErr="";
$successMessage="";

//checking null values
$errors = 0;
if($_SERVER["REQUEST_METHOD == POST"]){
if(isset($_POST['submit'])){
        $name = $_POST["first_name"];
        $name = $_POST["last_name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $technologies = $_POST["technologies"];

    if(empty($_POST["first_name"])){
        $first_nameErr = "Your first name is required";
        $errors = 1;
    }
    if(empty($_POST["last_name"])){
        $last_nameErr = "Last name is required";
        $errors = 1;
    }
    
    if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
        $emailErr = "Email is valid";
        $errors = 1;
    }
    if(isset($_POST["Technologies"])){
        $technologiesErr = "Select one technology";
        $errors = 1;
    }
    if(empty($_POST["message"])){
        $messageErr = "Message is required";
    }
    if(!$_FILES['resume']['name']){
        $fileErr = "File is required";
        $errors = 1;
    }
    
    if($errors == 0)
    {
        $successMessage="Form submitted successfully";
    }

}
}
?>
<html>
    <head>PHP FORM VALIDATION</head>
    <body>
        <div class="error">Required filed</div>
        <form mrthod="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label>First Name:</label>
            <input class="input" type="text" name="First Name" value="<?php echo $first_name; ?>">
            <div class="error"><?php echo $first_nameErr; ?></div>
            
            <label>Last Name:</label>
            <input class="input" type="text" name="Last Name" value="<?php echo $last_name; ?>">
            <div class="error"><?php echo $last_nameErr; ?></div>
            
            <label>Email :</label>
            <input class="input" type="text" name="email" value="<?php echo $email; ?>">
            <div class="error"><?php echo $emailErr; ?></div>
            
            <label>Message :</label>
            <textarea name="message" val=""></textarea>>
            <div class="error"><?php echo $messageErr; ?></div>
            
            <label>Technologies :</label>
            <div>
            <input class="input" type="radio" name="technologies" value="HTML" <?php if(isset($technologies) && $technologies == "HTML") echo "checked"; ?>>HTML
            <input class="input" type="radio" name="technologies" value="Javascript" <?php if(isset($technologies) && $technologies == "Javascript") echo "checked"; ?>>Javascript
            <input class="input" type="radio" name="technologies" value="PHP" <?php if(isset($technologies) && $technologies == "PHP") echo "checked"; ?>>PHP
            </div>
            <div class="error"><?php echo $technologiesErr; ?></div>
            
            <label>Resume:</label>>
            <input class="input" type="file" name="resume">
            <div class="error"><?php echo $fileErr;  ?></div>
            
            <input class="input" type="submit" name="submit" value="submit">
            <div class="success"><?php echo $successMessage?>></div>>
            
            <div style="background-color: green"><?php $successMessage; ?></div>
        </form>>
    </body>>
</html>