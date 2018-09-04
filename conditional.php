<?php

$d = date("D");

if($d == "Fri")
{
    echo "Have a nice weekend<br/>";
}
elseif($d == "Sun") {
    echo "Have a nice Sunday<br/>";
}
else{
    echo "Have a nice week ahead<br/>";
}

//switch statement
$d = date("D");

switch($d)
{
    case "Mon";
        echo "Today is on Monday<br/>";
        break;
    case "Tue";
        echo "Today is tuesday<br/>";
        break;
    case "Wed";
        echo "Today is on Wednesday<br/>";
        break;
    case "Thu";
        echo "Today is on Thursday<br/>";
        break;
    case "Fri";
        echo "Today is on Thursday<br/>";
        break;
    case "Sat";
        echo "Today is on Saturday<br/>";
        break;
    case "Sun";
        echo "Today is on Sunday<br/>";
        break;
    default;
        echo "Wonder which day it is<br/>";
}

//switch
$months[12] =array ("January","February","March","May","April"."June","July","August","September","October","November","December");

switch(months-1)
{
    case "January";
        echo "This is the first month of the year<br/>";
        break;
    case "February";
        echo "This is the second month of the year<br/>";
        break;
    case "March";
        echo "This is the third month of the year<br/>";
        break;
    case "April";
        echo "This is the fourth month of the year<br/>";
        break;
    case "May";
        echo "This is the fifth month of the year<br/>";
    case "June";
        echo "This is the sixth month of the year<br/>";
        break;
    case "July";
        echo "This is the seventh month of the year<br/>";
        break;
    case "August";
        echo "This is the eighth month of the year<br/>";
        break;
    case "September";
        echo "This is the nineth month of the year<br/>";
        break;
    case "October";
        echo "This is the tenth month of the year<br/>";
        break;
    case "November";
        echo "This is the eleventh month of the year<br/>";
        break;
    case "December";
        echo "This is the last month of the year<br/>";
        break;
    default;
        echo "Invalid input<br/>";
//ifelse
        
        $age = 24;
        
        if ($age >  18){
            echo "You`re an adult<br/>";
        }
        elseif($age > 30){
            echo "you should be married<br/>";
        }
        else{
            echo "You are young<br/>";
        }
        
}
?>
