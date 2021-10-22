<?php
$input=$_GET["fname"];
function countDigit($input)
{
    $count = 0;
    while ($input!= 0)
    {
        $input = round($input / 10);
        ++$count;
    }
    return $count;
}
 

echo "Number of digits : "
        . countDigit($input);
 

?>