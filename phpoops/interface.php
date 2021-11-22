<?php

interface Car {
  public function model();
}

class Suv implements Car {
  public function model() {
    echo "Swift";
  }
}

$an = new Suv();
$an->model();

?>