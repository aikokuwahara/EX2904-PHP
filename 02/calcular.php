<?php

    function ip($a) {
        return $a % 2;
    }
    
    $n1 = $_POST['n1'];
    
    if (ip($n1)==0)
    {
    echo "O número ".$n1." é par";
    }
    else 
    {
    echo "O número ".$n1." é ímpar";
    }


?>