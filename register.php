<?php
include "registerConn.php";
include "registerControl.php";
$result= getRegister($conn);

?>
<html>
    <head>
        <style>
            .error {color: #0000FF;} 
        </style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>     
    </head>
    <body>  
        <div class="container">
            <div class="row"> 
                <div class="col-md-4"></div>
                <div class="col-md-4">                <h4>Simple Register</h4>
</div>
                <div class="col-md-4"></div>
            </div>
            <div class="row">        
                <div class="col-md-4">
            <p><span class="error"></span></p>
                <form class="form-group" method="post" action="<?=htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                     <input placeholder="Name:" class="form-control" type="text" name="name">
                        <span class="error"> <?=$error['name'];?></span>
                         <input type="text" placeholder="Email:" class="form-control" name="email">
                        <span class="error"> <?=$error['email'];?></span>
                        <input type="text" class="form-control" placeholder="Password:" name="password">
                        <span class="error"><?=$error['password'];?></span>
                        <input type="hidden" name="action" value="create"/>
                         <input type="submit" name="submit" class="form-control btn btn-success" value="Submit">  
                </form>
                </div>
                <div class="col-md-8">
                    <table class="table table-dark">
                        <thead><tr>
                                     <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>password</th>
                            <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        <?php
                        foreach($result as $row)
                        {
                            ?>
                        <tr>
                            <td><?=$row['id'];?></td>
                            <td><?=$row['name'];?></td>
                            <td><?=$row['email'];?></td>
                            <td><?=$row['password'];?></td>
                        <td>
                            <form action="padawan.php" method="POST">
                                <input type="hidden" name="action" value="delete"/>
                                <input type="hidden" name="id" value="<?=$row['id'];?>"/>
                                <input type="submit" class="btn btn-danger" name="delete" value="delete"/>
                            </form>
                        </td>
                        </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </body>
</html>
