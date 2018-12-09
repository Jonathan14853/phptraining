<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.*/
 
include "registerConn.php";
include "registerControl.php";

?>
<html>
    <head>
        <style>
            .error{color:#0000FF};
        </style>
        <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.css"  crossorigin="anonymous">
        <script src="bootstrap/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                                           
                <div class="col-md-4">
                    <p>Registration Form</p>
                    <p><span class="error"></span></p>
                    <form class="form-group" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        Name:<input class="form-control" type="text" name="name">
                        <span class="error">* <?php echo $nameErr;?></span>
                        <br>
                        Email:<input class="form-control" type="text" name="email">
                        <span class="error">* <?php echo $emailErr;?></span>
                        <br>
                        Password:<input class="form-control" type="text" name="pass">
                        <span class="error">* <?php echo $passErr;?></span>
                        <br>
                        <input type="submit" name="submit" class="btn btn-success" value="submit">
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </body>
</html>
