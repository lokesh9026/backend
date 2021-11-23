
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
    yield "9";
    yield from generator1();
    yield "10";
 }
 foreach (generator() as $value){
    echo $value;
 }
 foreach(generator2() as $value){
    echo $value;
 }
?>
