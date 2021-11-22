
<html>
<head>
<title> PHP 7 : Tutorialpoint </title>
</head>
<body>
<?php
   function generator(){
      yield "zero";
      yield "one";
      yield "two";
   }
   function generator1(){
      yield "three";
      yield "four";
      yield "five";
   }



function generator2(){
      yield "six";
      yield "seven";
      yield "eight";
      yield from generator();
      yield "nine";
      yield from generator1();
      yield "ten";
   }
   foreach (generator() as $value){
      echo $value, PHP_EOL;
   }
   foreach(generator2() as $value){
      echo $value, PHP_EOL;
   }

   trait Reader{
      public function add($var1,$var2){
         return $var1+$var2;
      }
   }
   trait writer {
      public function multiplication($var1,$var2){
         return $var1*$var2;
      }
   }
   class File {
      use Reader;
      use writer;
      public function calculate($var1,$var2){
         echo "Result of addition:".$this->add($var1,$var2) ."\n";
         echo "Result of multiplication:".$this->multiplication($var1,$var2);
      }
   }
   $o = new File();
   $o->calculate(5,3);


?>
</body>
</html>
