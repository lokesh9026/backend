<?php
$input=$_GET["fname"];

    $count = 0;
    while ($input!= 0)
    {
        $input = round($input / 10);
        
        $count++;
        
    }

 

echo "Number of digits : ".$count;
 

?>