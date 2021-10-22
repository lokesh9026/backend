<?php  
$a =$_GET["fname"];  
$fac = 1;  
for ($x=$a; $x>=1; $x--)   
{  
  $fac = $fac * $x;  
}  
echo "Factorial of $a is $fac";  
?>  