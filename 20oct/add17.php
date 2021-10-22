<?php

$num= $_GET["fname"];
function pn($num)
{
    $sum = 0;

    for ($i = 1; $i < $num; $i++)
    {
        if ($num % $i == 0)
        {
            $sum = $sum + $i;
        }      
    }

    return $sum == $num;
}


  
if (pn($num))
    echo " perfect no";
else
    echo "not  perfect No";
?>