<?php
class Car {

  public $name;
  public $color;


  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$obj=new Car;
$obj->set_name("Swift");

echo $obj->get_name();
?>