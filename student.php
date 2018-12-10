<?php
include "studentConnect.php";
include "studentControl.php";
$result= getStudents($conn);

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
                <div class="col-md-4">                <h4>Students` Details</h4>
</div>
                <div class="col-md-4"></div>
            </div>
            <div class="row">        
                <div class="col-md-4">
            <p><span class="error"></span></p>
                <form class="form-group" method="post" action="<?=htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                     <input placeholder="First Name:" class="form-control" type="text" name="firstName">
                        <span class="error"> <?=$error['firstName'];?></span>
                       
                        <br>
                        <input placeholder="Last Name:" type="text" name="lastName" class="form-control">
                        <span class="error"> <?=$error['lastName'];?></span>
                        <br>
                        <input placeholder="Yeaar" type="text" name="yeaar" class="form-control">
                        <span class="error"> <?=$error['yeaar'];?></span>
                        <br>
                        <select id="course" name="course" placeholder="course" class="form-control">
                            <option value="Informatics">Informatics</option>
                            <option value="Software Engineering">Software Engineering</option>
                            <option value="Computer Science">Computer Science</option>
                        </select>
                        <span class="error"> <?=$error['course'];?></span>
                        <br>
                         <select id="gender" name="gender" placeholder="Gender:" class="form-control">
                            <option value="">Select</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                        <span class="error"> <?=$error['gender'];?></span>
                        <br>
                        <input type="hidden" name="action" value="create"/>
                         <input type="submit" name="submit" class="form-control btn btn-success" value="Submit">  
                </form>
                </div>
                <div class="col-md-8">
                    <table class="table table-dark">
                        <thead><tr>
                                     <th>id</th>
                            <th>firstName</th>
                            <th>lastName</th>
                            <th>yeaar</th>
                            <th>course</th>
                            <th>gender</th>
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
                            <td><?=$row['firstName'];?></td>
                            <td><?=$row['lastName'];?></td>
                            <td><?=$row['yeaar'];?></td>
                            <td><?=$row['course'];?></td>
                            <td><?=$row['gender'];?></td>
                        <td>
                            <form action="student.php" method="POST">
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
