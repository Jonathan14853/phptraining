<?php
include "customerConnect.php";
include "customerControl.php";
?>
<html>
    <head>
        <style>
            .error {color: #0000FF;} 
        </style>
        <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.css"  crossorigin="anonymous">
        <script src="bootstrap/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </head>
    <body>  
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                                           
                <div class="col-md-4">
                    <p>Customer Registration</p>
            <p><span class="error"></span></p>
                <form class="form-group" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                        Customer Name: <input class="form-control" type="text" name="custom_name">
                        <span class="error">* <?php echo $custom_nameErr;?></span>
                        <br>
                        Customer E-mail: <input type="text" class="form-control" name="custom_email">
                        <span class="error">* <?php echo $custom_emailErr;?></span>
                        <br>
                        Customer Number: <input type="text" class="form-control" name="custom_num">
                        <span class="error">*<?php echo $custom_numErr;?></span>
                        <br>
                        Gender:
                        <select value="custom_gender" id="custom_gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <br>
                        <span class="error">*<?php echo $custom_genderErr; ?></span>
                        <br>
                        <input type="submit" name="submit" class="btn btn-success" value="Submit">
                </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>

    </body>
</html>
