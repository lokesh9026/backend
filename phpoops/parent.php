<?php
// use of parent keyword is to access data in child class
class A{
function agun()
{
   echo "AK-47";
}
}
class B extends A{
    function bgun()
    {
        parent::agun();
    }
}
$b=new B;
$b->bgun();
?>