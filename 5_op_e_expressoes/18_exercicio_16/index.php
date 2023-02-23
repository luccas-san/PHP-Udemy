<?php

    //Minha solução:
    $a = 5;
    $b = 3;

    if($a == $b){
        echo "Os valores são iguais 1<br>";
    }

    if($a === $b){
        echo "Os valores são identicos 2<br>";
    }

    if($a != $b){
        echo "Os valores são diferentes 3<br>";
    }

    if($a !== $b){
        echo "Os valores são identicos 4<br>";
    }

    //Solução do professor:

    $c = 5;
    $d = 3;

    if($c == $d){
        echo "C é igual a D <br>";
    }

    if($c != $d){
        echo "C é diferente de D <br>";
    }

    if($c === $d){
        echo "C é idêntico a D <br>";
    }

    if($c !== $d){
        echo "C não é diferente de D <br>";
    }