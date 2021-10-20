<?php

$pi=22/7;
$r=2;
$a=4/3;

$vol=$pi*$a*(pow($r, 3));
$surface_area=4*$pi*(pow($r, 2));

echo nl2br ("Volume : $vol \n  Surfacearea : $surface_area");

?>