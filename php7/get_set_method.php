<?php
class fruits{

//properties (varialbes)
public $name;
public $color;

// methods (functions)
function set_name($name){
    $this->name = $name;
}
function get_name(){
    return $this->name;
}
}
$apple=new fruits();
$apple->set_name("apple");

echo $apple->get_name();
?>

<?php
class fruit{
    public $name;
    public $color;

    function __construct($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    } 
}

$obj=new fruit("orange");
echo $obj-> get_name();
?>