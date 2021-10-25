<?php
function arr($a,$b,$tmp){
$tmp=$a;
$a=$b;
$b=$tmp;

echo "<br><br>SWAPPED ARRAY<br>";
echo " 1ST array <br>";
print_r($a);
echo " <br>";
echo " = 2ND array ";
print_r($b);
}

$a=array(5,8,3,4);
$b=array(6,18,13,14);
$tmp=array();
arr($a,$b,$tmp);

echo "ORIGINAL ARRAY<br>";
echo " = 1ST array <br>";
print_r($a);
echo " = 2ND array ";
print_r($b);
?>



