<?php

$input=$_GET["fname"];
$num = pal($input); 

function pal($n){  
$number = $n;  
$sum = 0;  
while(floor($number)) {  
$rem = $number % 10;  
$sum = $sum * 10 + $rem;  
$number = $number/10;  
}  
return $sum;  
}  
 
if($input==$num){  
echo "$input is a Palindrome number";  
} else {  
echo "$input is not a Palindrome";  
}  
?> 