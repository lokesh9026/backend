<?php
$a = array(200,25, 20, 99, 4,3, 55);
$max = $a[0];
$min=$a[0];
$c=count($a);
for ($i=0 ; $i<$c ; $i++){
if ($max < $a[$i])
    $max=$a[$i];
        
else if
         
    ($min > $a[$i])
     $min=$a[$i]; 

 }
 echo "Maximum no. in array is : ".$max , "<br>";
 echo "Mainimum no. in array is : ".$min;"<br>";
 print_a($a);
 ?>

























 