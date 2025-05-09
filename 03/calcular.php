<?php

    function m($a, $b, $c) {

        if ($a > $b && $a > $c)
        {
            echo "O maior numero é: " .$a;
        }
        else if ($b > $a && $b > $c)
        {
            echo "O maior numero é: " .$b;
        }
        else if ($c > $b && $c > $a)
        {
            echo "O maior numero é: " .$c;
        }

        
    }
    
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $c=m($n1,$n2,$n3);
    


?>