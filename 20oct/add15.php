<?php  
$num= $_GET["fname"];
$t=0;  
$x=$num;  
while($x!=0)  
{  
$rem=$x%10;  
$t=$t+$rem;  
$x=$x/10;  

} 
echo "sum is ".$t;
 
?>  
