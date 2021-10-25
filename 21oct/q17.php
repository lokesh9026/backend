<?php
   

    $arr[0][0]=3;
    $arr[0][1]=2;
    $arr[1][0]=9;
    $arr[1][1]=1;
    $arr[2][0]=9;
    $arr[2][2]=10;
  


    $rs1=0;
    $rs2=0;
    $s3=0;

    $arrlength = count($arr);

    for($i = 0; $i<$arrlength; $i++){
        for($j=0; $j<$arrlength; $j++){
            if($i==0){
                $rs1 = $rs1 + $arr[$i][$j];
            }else if ($i==1){
                $rs2 = $rs2 + $arr[$i][$j];
            }else{
                $s3 = $s3 + $arr[$i][$j];
            }
        }
    }
    echo "first row : ".$rs1;
    echo "<br>second row: ".$rs2 ."<br>"."third row sum : ".$s3;

?>