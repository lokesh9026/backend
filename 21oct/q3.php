<?php
$a=array(7,4,8,2);
$c=count($a);
$e=0;
$o=0;
for ($i=0; $i<$c ; $i++){
    if ($a[$i]%2==0)
        $e++;
  
    else 
        $o++;      
}
    echo "count of even nos".$e ,"<br>";
    echo "count of odd nos ".$o;"<br>";
    print_r ($a);

?>
