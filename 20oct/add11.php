<?php

$a=$_GET["fname"];
$b=$_GET["lname"];
$c=$_GET["tname"];
$d=$_GET["sname"];

if ($a>$b  && $a>$c && $a>$d) {
    echo "greatest number : ".$a , "<br>";
}

else if ($b>$a && $b>$c && $b>$d) {
    echo "greatest number : ".$b , "<br>";
}

else if ($c>$a && $c>$b && $c>$d) {
    echo "greatest number : ".$c, "<br>";
}

else {
    echo "greatest number : ".$d , "<br>";
}

?>