<?php
$a=$_GET["fname"];
$b=$_GET["lname"];
$c=abs($a-$b);



if ($a < $b){
echo "profit :".$c;
}

else{
    echo "loss:".$c;
}
?>