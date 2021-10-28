<?php
$a=$_GET["fname"];
$c=0;
$checkpoint=1;

for ($i=2; $i<=$a/2 ; $i++){
     if ($a%$i==0){
     echo "not a prime number";
     $checkpoint=0;
     break;
     }
}

if ($checkpoint==1){
   echo "number is prime";
}

?>