<?php


    $arr = array(7,88,50,25,0,4);
    function maxNsecondmax($a){
        $max = $a[0];
        $secondmax = $a[0];
        for($i = 0; $i < count($a); $i++){
            if($max<$a[$i]){
                $secondmax = $max;
                $max = $a[$i];
            }
        }
	
	if($max != $a[0]){
        	print_r($a);
        	echo "<br><br>Max is ${max}.<br>Second max is ${secondmax}.";
    	}else{
		for($i =1; $i<count($a); $i++){
			$secmax = $a[1];
			if($secmax<$a[$i]){
                	$secondmax = $max;
                	$secondmax = $a[$i];
            		}		
		}
		print_r($a);
        	echo "<br><br>Max is ${max}.<br>Second max is ${secondmax}.";	
	}
    }

    maxNsecondmax($arr);
?>