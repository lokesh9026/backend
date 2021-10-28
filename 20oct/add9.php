<?php
$ch=$_GET["fname"];
if ($ch >= 'A' && $ch <= 'B'){
echo "capital character";
}
else if ($ch >= "a" && $ch <= "z"){
echo "input is in lower case";
}
else if ($ch >= 0 && $ch <= 9){
echo "input is number";
}
else{
    echo "input is special symbol";
}
?>
