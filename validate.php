<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$passwordErr = $genderErr = $emailErr = "";
$password = $gender = $email = "";
foreach ($_POST as $key => $value){
    if(empty($_POST[$key])){
        $error_message = "All fields are required";
    }
}

if(!isset($_POST)){
    if(!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)){
        $error_message="Invalid email address";
    }
}

if($_POST['password'] != $_POST['confirm_password']){
    $error_message='passwords should be the same<br>';
}

if(isset($error_message)){
    if(!isset($_POST["gender"])){
        $error_message = "All fields are required";
    }
}

if(!isset($error_message)){
    if(!isset($_POST["terms"])){
        $error_message="Please accept terms and conditions";
    }
}
?>
<html>
    <head><title>Form Validation</title></head>
    <body>
        <form action="validate.php" method="POST" class="form-group">
            <table>
                <tr>
                    <td>Email</td>
                    <td><input class="form-control" type="text" name="email"></td>
                    <span class="error"><?php echo $emailErr?></span>
                </tr>
                
                <tr>
                    <td>Password:</td>
                    <td><input class="form-control" type="text" name="password"></td>
                    <span class="error"><?php echo $passwordErr?></span>
                </tr>
                
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input class="form-control" type="radio" name="Gender" value="Male">Male
                        <input class="form-control" type="radio" name="Gender" value="Female">Female
                    </td>
                </tr>
                
                <tr>
                    <td>Agree:</td>
                    <td><input class="form-control" type="checkbox" name="checked" value="1"></td>
                    <?php if(isset($_POST["checked"])){}?>
                </tr>
                
                <tr>
                    <td>Submit:</td>
                    <td>
                        <input class="form-control" type="submit" name="submit"  value="submit">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>

