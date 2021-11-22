<?php 
class Car{
    public $comp;
    public $color="red";
    public $model="mahidra XUV";

    public function suv(){
        return $this->model."suv ".$this->comp."in ".
        $this->color;

    }
}

$obj=new car;

$str=$obj->suv();
echo $str;
?>