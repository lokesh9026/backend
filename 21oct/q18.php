
<?php


    $arr[0][0]=30;
    $arr[0][1]=22;
    $arr[1][0]=9;
    $arr[1][1]=11;
    $arr[2][0]=9;
    $arr[2][1]=4;


    $fj=0;
    $sj=0;

    $arrlength = count($arr);
    for($i = 0; $i<$arrlength; $i++){
        for($j=0; $j<$arrlength; $j++){
            if($j==0){
                $fj = $fj + $arr[$i][$j];
            }else{
                $sj = $sj + $arr[$i][$j];
            }
        }
    }
    echo "first column : ".$fj;
    echo "<br>second column: ".$sj;
?>