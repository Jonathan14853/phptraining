<?php

$fname_error="";
$lname_error="";
$admission_error="";
$programme_error="";
$year_error="";

if(!empty($_POST["submitted"])){
    
    $fname=trim($_POST['fname']);
    $lname=trim($_POST['lname']);
    $admission=trim($_POST['admission']);
    $programme=trim($_POST['programme']);
    $year=trim($_POST['year']);
    
    $error=false;
    
    if(empty($fname)){
        $fname_error = "First name is empty.Please enter your first name";
        $error = true;
    }
    if(empty($lname)){
        $lname_error = "Last namei is empty.Please enter your last name";
        $error = true;
    }
    if(empty($addmission)){
        $admission_error = "Please enter your admission number";
        $error = true;
    }
    if(empty($_POST[programme])){
        $programme_error = "Please enter your programme";
        $error = true;
    }else{
        $programme = $_POST["programme"];
    }
    if(empty($_POST['agree'])){
        $terms_error = "if you agree please check the box below";
        $error = true;
    }else{
        $agree=$_POST['agree'];
    }
}
?>

<html>
    <head>
        <title>Student Registration Form</title>
    </head>
    <body>
        <div id="wrap">
            <form method="POST" action="formValidator.php">
                <div>
                    <div class="cont_details">
                        <fieldset>
                            <legend>Fill in your Student details!</legend>
                            
                            <div class="field_container">
                                <label for="fname">First Name</label>
                                <input type="text" id="fname" name="First Name"
                                       value="<?php echo htmlentities($fname); ?>" />
                                       
                                       <span class="error"><?php echo $fname_error; ?></span>
                                <br>
                                <label for="lname">Last name</label>
                                <input type="text" id="lname" name="Last Name"
                                       value="<?php echo htmlentities($lname); ?>" />
                                
                                       <span class="error"><?php echo $lname_error; ?></span>
                                <br>
                                <label for="admissio">Admission Number</label>
                                <input type="text"  id="admission" name="admission"
                                       value="<?php echo htmlentities($admission);?>" />
                                
                                       <span class="error"><?php echo $admission_error; ?></span>
                                <br>
                                <label for="year">Year</label>
                                <input type="text" id="year"  name="year"
                                       value="<?php echo htmlentities($year);?>" />
                                
                                       <span class="error"><?php echo $year_error; ?></span>
                                <br>
                            </div>
                            <div class="field_container">
                                <label>Programme</label>
                                       <span class="error"><?php echo $programme ?></span>
                                       <select id="programme" name="programme">
                                           <option value="">Select Programme</option>
                                           <option><?php echo $programme=='Informatics'?'selected':'';?>Informatics</option>
                                           <option><?php echo $programme=='Surveying'?'selected':'';?>Surveying</option>
                                           <option><?php echo $programme=='Engineering'?'selected':'';?>Engineering</option>
                                       </select>
                            </div>
                            
                            <input type="submit"  name="Submitted" value="submit" id="submit">
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>