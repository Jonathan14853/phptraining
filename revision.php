<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// I define variables and set to empty values
$nameErr = $genderErr = $emailErr ="";
$name = $email = $gender = "";

if($_SERVER["REQUEST_METHOD"]== "POST"){
    if(empty($_POST["name"])){
       $nameErr = ">Please fill in your name"; 
    }else{
        $name = test_input($_POST["name"]);
    }
    
    if(empty($_POST["gender"])){
        $genderErr = "Gender is required";
    }else{
        $gender = test_input($_POST["gender"]);
    }
    
    //to check whether the email is well formed
    if(empty($_POST["email"])){
        $emailErr= "Email is required";
    }else{
        $email = test_input($_POST["email"]);
    }
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr="Invalid email format";
    }
}
?>

<html>
    <head>
        <style>
            .error{color: #FF0000;};
        </style>
    </head>
        <body>
            <p><b>My Revision</b></p>
            <p><span class="error">* Required field</span></p>
            <form method="POST" action="revision.php">
                
                Name:<input type="text" name="name">
                <span class="error">* <?php echo $nameErr; ?></span>
                <br>
                Gender:
                <input type="text" name="gender" value="Male">
                <br>
                <input type="text" name="gender" value="Female">
                <span class="error">* <?php echo $genderErr;?></span>
                <br>
                Email:<input type="text" name="email">
                <span class="error">* <?php echo $emailErr; ?></span>
                <br>
                    <input type="submit" name="submit" value="submit">
            </form>
        </body>
</html>
