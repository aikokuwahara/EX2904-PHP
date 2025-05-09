<?php

    function mult($a, $b) {
        return $a * $b;
    }
    
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $m = mult($n1, $n2);
    
    echo "A multiplicação entre $n1 e $n2 é: $m";


?>