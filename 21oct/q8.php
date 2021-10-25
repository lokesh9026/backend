<?php
$a=array(3,8,1,6,9);
$b=1;
$c=count($a);
for ($i=0 ; $i<$c ; $i++){ 
     if ($b==$a[$i]){
      
     echo "no is at index :".$i;
     }
}
print_r($a);


?>