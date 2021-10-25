<?php

$a=array(2,-8,6,-4,0,-7,-1);
$c=count($a);
$d=0;
$e=0;
$f=0;

for ($i=0;$i<$c;$i++){
    
    if ($a[$i]>0){
    $d++;
    }
    else if ($a[$i]<0){
    $e++;
    }
    else {
    $f++;
    }
}

echo "+ve nos are".$d , "<br>";
echo "-ve nos are".$e , "<br>";
echo "zeros are".$f , "<br>";
print_a($a);

?>

