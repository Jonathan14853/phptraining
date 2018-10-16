
        <?php
            //define variables and set to empty values
            $name = $email = $gender = $comment = $website = "";
            if ($_SERVER["REQUEST_METHOD"] = "POST"){
                $name = test_input($_POST["name"]);
                $email = test_input($_POST["email"]);
                $gender = test_input($_POST["gender"]);
                $comment = test_input($_POST["comment"]);
                $website = test_input($_POST["website"]);
            }
            
            function test_input($data){
                $data = trim($data);
                $data = htmlspecialchars($data);
                $data = stripcslashes($data);
                return $data;
            }
            
            
            echo "<h2>Your given details are as :</h2>";
            echo $name;
            echo "<br>";
            
            echo $email;
            echo "<br>";
            
            echo $website;
            echo "<br>";
            
            echo $comment;
            echo "<br>";
            
            echo $gender;

        ?>
<html>
    <head>
        <title>PHP Form Validation</title>
    </head>
    <body>
        <h2>Tutorials Point Absolute Classes Registration</h2>
        
        <form method = "post" action = "formIntro.php">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type =" text" name ="name"></td>
                </tr>
                
                <tr>
                    <td>Email:</td>
                    <td><input type = "text" name = "email"></td>
                </tr>
                
                <tr>
                    <td>Specific Time:</td>
                    <td><input type = "text" name = "website"></td>
                </tr>
                
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type = "radio" name = "gender" value = "Male">Male
                        <input type = "radio" name = "gender" value = "Female">Female
                    </td>
                </tr>
                
                <tr>
                    <td>Class Details:</td>
                    <td><textarea name = "comment" rows = "5" cols = "40"></textarea></td>
                </tr>
                
                <tr>
                    <td>
                        <input type = "submit" name = "submit" value = "submit">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
        
        