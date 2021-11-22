<?php 
// self keyword use to access the same class 
class Animal {
  public static function makeSound(){
      echo "baarking";
  }
  
  public static function vocalize() {
    echo self::makeSound(); 
  }
}
Animal::vocalize();

?>