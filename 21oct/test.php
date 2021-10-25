<?php
$a = array(0, 201, 99, 400);


$c=count($a);
$max=$a[0];
$max2=$a[0];

for ($i=0 ; $i<=$c ; $i++){
   
if ($max < $a[$i]){
    $max2=$max;
    $max=$a[$i];
    }
}

echo "max number is : ".$max;
print_r ($a);

if ($max!=$a[$i]){
 
for ($i=1 ; $i<=$c ; $i++){
        $max2=$a[1];
        $max=$a[0];
    if ($max2 < $a[$i]){
       
        $max3=$a[$i];

        }
        
    }
    echo "second max number is : ".$max3 ,"<br>";
        echo " max number is : ".$max ,"<br>";
}



?>