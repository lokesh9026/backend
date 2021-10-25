<?php

function primeCount($arr, $n)
{
	$max_val = max($arr);
	$prime = array_fill(0, $max_val + 1, true);


	$prime[0] = false;
	$prime[1] = false;
	for ($p = 2; $p * $p <= $max_val; $p++)
	{


		if ($prime[$p] == true)
		{

	
			for ($i = $p * 2;
				$i <= $max_val; $i += $p)
				$prime[$i] = false;
		}
	}

	$count = 0;
	for ($i = 0; $i < $n; $i++)
		if ($prime[$arr[$i]])
			$count++;

	return $count;
}

$arr = array(12,11,2,25);
$n = sizeof($arr);

echo primeCount($arr, $n);
echo "<br>";
print_r($arr)
?>
