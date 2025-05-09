<?php

    function i($a) {
         if ($a<18)
        {
            echo "Menor de idade";
        }

        else if ($a>18 && $a<60)
        {
            echo "Adulto";
        }
        else 
        {
            echo "Idoso";
        }
    }
    
    $n1 = $_POST['n1'];
    $c= i($n1);

 
    
    


?>