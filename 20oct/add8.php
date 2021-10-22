<?php

$a=$_GET["fname"];
$b=$_GET["lname"];
$c=$_GET["tname"];
$d=$a+$b+$c;
$e=$d/3;

echo "total of three students : " .$d, "<br>";

echo "percentage of three students : ".$e, "<br>";

if ($e>=35&& $e<50){
echo "D grade";
}

else if ($e>=50&& $e<65){
    echo "B grade";
    }

else if ($e>=50&& $e<75){
        echo "B+ grade";
}

else if ($e>=75&& $e<85){
    echo "A grade";
}


?>