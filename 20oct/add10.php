<?php

$a=$_GET["fname"];
$b=$_GET["lname"];
$c=$_GET["tname"];
$d=$_GET["sname"];

if ($a>$b  && $a>$c ) {
    echo "greatest number : ".$a , "<br>";
}

else if ($b>$a && $b>$c) {
    echo "greatest number : ".$b , "<br>";
}


else {
    echo "greatest number : ".$c , "<br>";
}

?>