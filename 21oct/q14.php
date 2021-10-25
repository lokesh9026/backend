<?php

function isPalindrome($N)
{
	$str = "" . $N;
	$len = strlen($str);
	for ($i = 0; $i < $len / 2; $i++)
	{
		if ($str[$i] != $str[$len - 1 - $i])
			return false;
	}
	return true;
}

function isPalinArray($arr , $n)
{

	for ($i = 0; $i < $n; $i++)
	{
		$ans = isPalindrome($arr[$i]);
		if ($ans == false)
			return false;
	}
	return true;
}

$arr = array(1, 3, 11);

$n = sizeof($arr);

$res = isPalinArray($arr, $n);
if ($res == true)
	echo "Array is a PalinArray";
else
	echo "Array is not a PalinArray";

?>


