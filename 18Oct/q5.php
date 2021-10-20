<?php

$coins=10;
$paise1=50;
$paise2=25;
$paise3=20;
$paise4=10;
$total_paise=$coins*$paise;
$rupees1= floor (($total_paise) / 100);
$rupees2= floor (($total_paise) / 100);
$rupees3= floor (($total_paise) / 100);
$rupees4= floor (($total_paise) / 100);

echo "$rupees1:$rupees2:$rupees3:$rupees4";

?>