<?php

$init = 685;
$hours = floor($init / 3600);
$min=floor(($init / 60) % 60);
$sec=$init%60;


echo "$hours:$min:$sec";

?>