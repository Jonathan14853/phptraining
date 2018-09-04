<?php
$num =1;
for ($i = 0;$i < 10;$i++)
{
    $prod = $num * $i;
    echo "Product = $prod<br/>";
}
$x = 0;
$y = 50;
while ($x < 10)
{
    $x++;
    $y--;
}
echo "x ends at x=$x and y ends at y=$y <br/>";

//foreach loops through an array
$numbers = array(10,20,30,40,50);
foreach($numbers as $value){
    if($value == 40){
        break;
    }
    /*if($value == 40){
        continue;
    }*/
    echo "Value is $value<br/>";
}
?>