<?php
class Cars {
    public $name;
    public $color;
    public function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }
    public function intro(){
        echo "new launched {$this->name}";
    } 
}

class trucks extends Cars{
    public function msg(){
        echo "heavy duty vehicle";
    }
}

$trucks=new trucks("tata 204","black");
$trucks->msg();
$trucks->intro();

?>