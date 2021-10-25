<?php
$a=array(5,3,60,7,10);
$c=count($a);
$d=0;
for ($i=0 ; $i<=$c ; $i++){
    if ($a[$i]%10 == 0 || $a[$i]%10 == 0){
    $d++;
    }
}
echo "Nos. WHICH ARE DIVISIBLE BY 5 PRESENT IN ARRAY IS: ".$d;
echo "<br>";
print_r($a);
?>