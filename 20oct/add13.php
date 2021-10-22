<?php  
$s=$_GET["fname"]  ;
$l= strlen($s);  
for ($i=($l-1) ; $i >= 0 ; $i--)   
{  
  echo $s[$i];  
}  
?>  