<?php
include "studentConnect.php";
include "student.php";
?>
<html>
    <head>
        <style>
            .error{color: #FF0000;}
        </style>
        <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.css"  crossorigin="anonymous">
        <script src="bootstrap/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
            <div class="container">
                <div classs="row">
                    <div class="col-md-4">
                        <p><span class="error">* required field</span></p>
                        <form class="form-group" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                <legend>Student Details</legend>
                                First Name:<input type="text" name="firstName" class="form-control"/>
                                <br>
                                <span class="error">*<?php echo $firstNameErr; ?></span>
                                
                                Last Name:<input type="text" name="lastName" class="form-control"/>
                                <br>
				<span class="error">*<?php echo $lastNameErr; ?></span>
                               
                                Student Id:<input type="text" name="studentId" class="form-control"/>
                                <br>
				<span class="error">*<?php echo $studentIdErr; ?></span>
                                
                                Year:<input type="text" name="yeaar" class="form-control" />
                                <br>
				<span class="error">*<?php echo $yeaarErr; ?></span>
                          
                                Select Course:
                                <select id="course" name="course" class="form-control">
                                    <option value="Informatics">Informatics</option>
                                    <option value="Computer Science">Computer Science</option>
                                    <option value="Information Science">Information Science</option>
                                    <option value="Software Engineering">Software Engineering</option>
                                </select>
                                <br>
                                <span class="error">*<?php echo $courseErr; ?></span>
                               
                                Select Gender:
                                <select id="gender" name="gender"class="form-control">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <br>
                                <span class="error">*<?php echo $genderErr;?></span>
                                <br>
                            <input type="submit" class="btn btn-success"name="submit" value="submit">
                        </form>
                    </div>
                </div>
            </div>
        
    </body>
</html>

