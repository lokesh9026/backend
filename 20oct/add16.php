<?php  
$num= $_GET["fname"];
$t=0;  
$x=$num;  
while($x!=0)  
{  
$rem=$x%10;  
$t=$t+$rem*$rem*$rem;  
$x=$x/10;  
}  
if($num==$t)  {  
echo "Armstrong number";  
}  
else  {  
echo " not an armstrong number";  
}  
?>  