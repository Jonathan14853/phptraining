<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    function test_input($data){
        $data= trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
    }
    
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $class = $class = $course = $subject = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["name"])){
            $nameErr = "Please fill in your name";
        }else{
            $name = test_input($_POST["name"]);
        }
        
        if(empty($_POST["email"])){
            $emailErr = "Please fill in your email";
        }else{
            $email = test_input($_POST["email"]);
        }
        
        if(empty($_POST["gender"])){
            $genderErr = "Please fill in your gender";
        }else{
            $gender = test_input($_POST["gender"]);
        }
        
        if(empty($_POST["course"])){
            $courseErr = "";
        } else {
           $course = test_input($_POST["course"]); 
        }
        
        if(empty($_POST["class"])){
            $classErr = "";
        }else{
            $class = test_input($_POST["class"]);
        }
        
        if(empty($_POST["subject"])){
            $subjectErr = "Please select one or more";
        }else{
            $subject = $_POST["subject"];
        }
        
        /*foreach($_POST as $key => $value)
            {
                print $value;
            }
        */
        echo "Your name is ".$name."\n";
        echo "Your email is". $email."\n";
        echo "Your gender is ".$gender."\n";
        echo "Your class informstion is". $class."\n";
        echo "Your class time is $course"."\n";
        
        for($i = 0; $i < count($subject); $i++){
            echo ($subject[$i]."");
        }
    }
    
?>

<html>
    <head>
        <title>Form Validation</title>
    </head>
    <body>
        <form action="validation.php" method="POST">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" required="required">
                        <span class="error">* <?phpecho $nameErr?></span>
                    </td>
                </tr>
                
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" required="required">
                        <span class="error">* <?php echo $emailErr?></span>
                    </td>
                </tr>
                
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="gender" valuue="Male">Male
                        <input type="radio" name="gender" valuue="Female">Female
                        <span class="error">* <?php echo $genderErr ?></span>
                    </td>
                </tr>
                
                <tr>
                    <td>Time:</td>
                    <td><input type="text" name="course">
                        <span class="error">*<?php echo $websiteErr?></span>
                    </td>
                </tr>
                
                <tr>
                    <td>Classes:</td>
                    <td>
                        <textarea name="class" rows="5" cols="40"></textarea>
                    </td>
                </tr>
                
                <tr>
                    <td>Select:</td>
                    <td>
                        <select name="subject" required="required">
                            <option value="Andrroid">Android</option>
                            <option value="Java">Java</option>
                            <option value="C++">C++</option>
                            <option value="Python">Python</option>
                            <option value="Bootstrap">Bootstrap</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Agree</td>
                    <td><input type="checkbox" name="checked"  value="1"></td>
                    <?php if(!isset($_POST['cheked'])){}?>
                    <span class="error">* <?php echo "Please Aree to terms"?></span>
                </tr>
                
                <tr>
                    <td>Submit</td>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
