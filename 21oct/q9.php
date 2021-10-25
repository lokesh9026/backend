<?php
$arr=array(5,9,3,8,1,80);
sort($arr);
$c=count($arr);
$x=18;
echo "Sorted Array: <br>";
foreach($arr as $n){
    echo " ", "<br>",$n;
}
$low=0;
$high=$c-1;
while ($low <= $high) {
    $mid = floor(($low + $high) / 2);   
    echo "<br>";
  
    if($arr[$mid] == $x) {
        echo "No. present";
        $t=true;
        break;
       }
    if ( $x < $arr[$mid]) {
 
        $high = $mid -1;
    }
    else {

        $low = $mid + 1;
    }
}
if ($t=true);
echo "No. not present","<br>";
print_r($arr);

?>
