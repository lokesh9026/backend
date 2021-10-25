<?php

$arr = array( 11, 8, 3, 4, 1, 6 );
$c=count($arr);
$even = 0;
$odd = 0;
for ($i = 0; $i < $c; $i++)
{
    
    // Loop to find even, odd sum
    if ($i % 2 == 0)
        $even += $arr[$i];
    else
        $odd += $arr[$i];
}

echo("Even index positions sum " . $even) ,"<br>";
echo("\nOdd index positions sum " . $odd);

?>
