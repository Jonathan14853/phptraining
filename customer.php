<?php
include "customerConnect.php";
include "controlCustomer.php";
$result= getCustomers($conn);

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
                <div class="col-md-4">                
</div>
                <div class="col-md-4"></div>
            </div>
            <div class="row">        
                <div class="col-md-4">
            <p><span class="error"></span></p>
                <form class="form-group" method="post" action="<?=htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                     <input placeholder="Customer Name:" class="form-control" type="text" name="customer_name">
                        <span class="error"> <?=$error['customer_name'];?></span>
                        <br>
                         <input type="text" placeholder="Customer Email:" class="form-control" name="customer_email">
                        <span class="error"> <?=$error['customer_email'];?></span>
                        <br>
                        <input type="text" class="form-control" placeholder="Customer Number:" name="customer_num">
                        <span class="error"><?=$error['customer_num'];?></span>
                        <br>
                         <select id="gender" name="gender" placeholder="Gender:" class="form-control">
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <span class="error"> <?=$error['gender'];?></span>
                        <br>
                        <input type="hidden" name="action" value="create"/>
                         <input type="submit" name="submit" class="form-control btn btn-success" value="Submit">  
                </form>
                </div>
                <div class="col-md-8">
                    <table class="table table-purple">
                        <thead><tr>
                                     <th>id</th>
                            <th>customer_name</th>
                            <th>customer_email</th>
                            <th>customer_num</th>
                            <th>gender</th>
                            <th>Update</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        <?php
                        foreach($result as $row)
                        {
                            ?>
                        <tr>
                            <td><?=$row['id'];?></td>
                            <td><?=$row['customer_name'];?></td>
                            <td><?=$row['customer_email'];?></td>
                            <td><?=$row['customer_num'];?></td>
                            <td><?=$row['gender'];?></td>
                        <td>
                            <form action="padawan.php" method="POST">
                                <input type="hidden" name="action" value="update"/>
                                <input type="hidden" name="id" value="<?=$row['id'];?>"/>
                                <input type="submit" class="btn btn-danger" name="update" value="update"/>
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
