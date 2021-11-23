<?php
   trait Reader{
      public function add($num1,$num2){
         return $num1+$num2;
      }
   }
   trait writer {
      public function multiplication($num1,$num2){
         return $num1*$num2;
      }
   }
   class File {
      use Reader;
      use writer;
      public function calculate($num1,$num2){
         echo "Result of addition:".$this->add($num1,$num2) ."\n";
         echo "Result of multiplication:".$this->multiplication($num1,$num2);
      }
   }
   $old = new File();
   $old->calculate(5,3);
?>
