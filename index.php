<?php

print "This is James Kuta Simiyu  <br>";
$name="Hillary Thomas Blessing <br>";
$two=2;
$three=3;
print $name;
$now=8;
if($now==9)
{  print "Hillay should be sleeping"; }else { print "not yet time <br>"; }

//local variable is declared within a function
function multiply($value)
{
    $value *= 15;
    return $value;
}
$result = multiply(15);
print "The return value is $result <br>";
//global variable.
$somevar = 15;
function addit()
{
    GLOBAL $somevar;
    $somevar++;
    print "Somevar is $somevar <br>";
}
addit();

//for loop
$a = 0;
$b = 0;

for ($i = 0; $i <=3; $i++)
{
    $a += 10;
    $b += 5;
    
    echo "At the end of the end of the loop a = $a and b = $b <br>";
}

//while loop..repeats as long as condition is true.
$number1 = 0;
$number2 = 50;

while ($number1 < 10)
{
    $number2--;
    $number1++;
}

echo "Loop stopped at number1=$number1 and number2=$number2 <br>";

/*do..while loop
executes a block of statements once...then repeats as long as the specified condition is true. */
$x = 10;
do{
    $x--;
}while ($x > 0);
echo "Loop stopped at x = $x <br>";

//arrays
//associative

$salaries= array("Jonathan" => 300000, "Miriam" => 120000,"Hillary" => 30000);
echo "Salary of Jonathan is ". $salaries['Jonathan'] ."<br/>";
echo "Salary of Miriam is ".$salaries['Miriam']. "<br/>";
echo "Salary of Hillary is".$salaries['Hillary']."<br>";

$salaries['Jonathan'] = "High";
$salries['Miriam'] = "Medium";
$salries['Hillary'] = "Low";

echo "Jonathan`s salary is ".$salaries['Jonathan']."<br/>";
echo "Miriam`s salary is".$salaries['Miriam']."<br/>";
echo "Hillary`s salary is ".$salaries['Hillary']."<br/>";

?>
