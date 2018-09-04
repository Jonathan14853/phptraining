<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST['first_name']))
{
  print $_POST['first_name']."\n";
}
if(isset($_POST['last_name']))
{
  print $_POST['last_name']."\n";
}
foreach ($_POST as $key => $value) {
    print $value ."\n";
}
?>
<html>
    <head><title>Form::</title></head>
    <body>
        <form action="form.php" method="POST" >
            <p><b>Customer Registration</b></p> <br>
            <input type="text" name="first_name" placeholder="First Name"/>
            <br/>
            <br/>
            <input type="text" name="last_name" placeholder="Last Name"/><br/>
             <br/>
             <input type="submit" value="Submit"/>
            
        </form>
    </body>
</html>
