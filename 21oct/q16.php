<?php

$a = array (
  array(1,10),
  array(6,1),
  array(1,11),

);
$sum=0;
$c=count($a);

for ($i=0 ; $i<$c ;$i++){
    for ($j=0 ; $j<$c ;$j++){
    $sum=$sum+$a[$i][$j];
}
}
echo "sum of the elements in array : ".$sum;
?>