<?php
//associative arrays

    $salaries= array("Jonathan" => 300000, "Miriam" => 120000, "Hillary" => 30000);
    echo "Salary of Jonathan is ". $salaries['Jonathan'] ."<br/>";
    echo "Salary of Miriam is ".$salaries['Miriam']. "<br/>";
    echo "Salary of Hillary is".$salaries['Hillary']."<br>";

    $salaries['Jonathan'] = "High";
    $salries['Miriam'] = "Medium";
    $salries['Hillary'] = "Low";

    echo "Jonathan`s salary is ".$salaries['Jonathan']."<br/>";
    echo "Miriam`s salary is".$salaries['Miriam']."<br/>";
    echo "Hillary`s salary is ".$salaries['Hillary']."<br/>";
    
    
//multi-dimensional array
    $marks = array(
        "jonathan"=> array(
            "ict" => 72,
            "programming" => 67,
            "db" => 84
        ),
        "graham" => array(
            "ict" => 34,
            "programming" => 78,
            "db" => 56
        ),
        "john" => array(
            "ict" => 26,
            "programming" => 85,
            "db" => 71
        )
    );
//Accessing values
    echo "Marks for Jonathan  in programming :";
    echo $marks['jonathan']['programming']."<br/>";
    
    echo "Marks for graham in ict :";
    echo $marks['graham']['ict']."<br/>";
    
    echo "Marks for John in db:";
    echo $marks['john']['db']."<br/>";
    
//numeric array
    
    $digits = array(11,12,13,14,15);
    
    foreach($digits as $value){
        echo "Value is $value<br>";
    }
    
/*another method*/
    $number[0] = "one";
    $number[1] = "two";
    $number[2] = "three";
    $number[3] = "four";
    $number[4] = "five";
    
    foreach ($number as $value){
        echo "Value is $value<br>";
    }
?>