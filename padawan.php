<?php
include "connection.php";
include "controller.php";
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
                    <p>Padawan Registration</p>
            <p><span class="error"></span></p>
                <form class="form-group" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                        Name: <input class="form-control" type="text" name="name">
                        <span class="error">* <?php echo $nameErr;?></span>
                        <br>
                        E-mail: <input type="text" class="form-control" name="email">
                        <span class="error">* <?php echo $emailErr;?></span>
                        <br>
                        Website: <input type="text" class="form-control" name="website">
                        <span class="error"><?php echo $websiteErr;?></span>
                        <br>
                        Comment: <textarea name="comment" rows="5" class="form-control" cols="40"></textarea>
                        <br>
                        Gender:
                        <select id="gender" name="gender" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <span class="error">* <?php echo $genderErr;?></span>
                        <input type="submit" name="submit" class="btn btn-success" value="Submit">  
                </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>

    </body>
</html>
