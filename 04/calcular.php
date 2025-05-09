<?php

    function m($a) {
        return ($a - 32) / 1.8;
    }
    
    $n1 = $_POST['n1'];
    $c= m($n1);
    echo "A temperatura ".$n1. "°F é igual a ".$c. "C°";
 
    
    


?>