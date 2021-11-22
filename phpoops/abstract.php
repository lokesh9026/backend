<?php
abstract class Base {
    abstract function Car();
}
class Derived extends base {
    function Car() {
        echo "Want to buy a car";
    }
}
$b1 = new Derived;
$b1->Car();
?>
