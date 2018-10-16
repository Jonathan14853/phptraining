<?php
/* arrays*/

//multi-dimensional array
$grades=array(
    Jonathan => array(
        "structured programming"=> "A",
        "ICT and Development"=>"B",
        "Operating System"=> "A"
    ),
    Graham => array(
        "structured Programming" => "E",
        "ICT and Development" => "C",
        "Operating System" => "C+"
    )
);
        echo "Grade for Jonathan in Structured Programming:";
        echo $grades['Jonathan']['Structured Programming']."<br/>";
?>