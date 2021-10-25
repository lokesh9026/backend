<?php
    
   
    $arr = array(12,44,31,9);
    $brr = array(90,30,80,40);

    function printArray($a){
        for($i = 0; $i<count($a); $i++){
            echo $a[$i]." ";
        }
    }
    echo "ORIGINAL ARRAY<br>";
    echo " 1ST array <br>".printArray($arr);
    echo "<br>";
    echo " 2ND array ".printArray($brr);

    function arr2(&$a, &$b){
        for($i = 0; $i < count($a); $i++){
            $a[$i] = $a[$i] + $b[$i];
            $b[$i] = $a[$i] - $b[$i];
            $a[$i] = $a[$i]-$b[$i];
        }
    }

    arr2($arr, $brr);
    echo "<br><br>SWAPPED ARRAY<br>";
    echo " 1ST array <br>".printArray($arr);
    echo "<br>";
    echo " 2ND array ".printArray($brr);
?>