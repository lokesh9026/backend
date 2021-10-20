<?php
$p=100;
$t=2;
$r=10/100;

$w=1+$r;



$ci=(($p*pow($w,$t))-$p);

$si=($p*$r*$t);
echo nl2br ("compound intrest : $ci \n  simple intrest : $si")

?>
