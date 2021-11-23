<?php

$cars=array("ritz","bmw","zen");
echo count($cars);
echo "<br>";

//in php7 array is defined as below
define("cars",['alto',"swift","ciaz","baleno"]);
print(cars[2]) ;
echo "<br>";



define("fruits",["apple","banana","grapes"]);
print(fruits[0]);

//associate array

$cars=array("maruti"=> "alto","huyndai"=>"creta");
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo  $age['Ben'];


echo "<br>";
$color=array("red","green","orange");
foreach($color as $value){
    echo $value."<br>";
}
?>
