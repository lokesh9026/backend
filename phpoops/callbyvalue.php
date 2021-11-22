<?php  
function adder($str2)  
{  
      $str2 .= 'Call By Value';
      
}  
$str = 'i am out of function scope and i am not added to inside string';  
adder($str);  
echo "$str";
?>


