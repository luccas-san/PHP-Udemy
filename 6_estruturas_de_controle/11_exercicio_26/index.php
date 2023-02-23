<?php

    $a = 35;
    $b = 40;
    $c = 55;

    $velocidadePermitida = 40;

    //Velocidade Permitida
    if($a < $velocidadePermitida){
        echo "Você está na velocidade correta! <br>";
    } else if ($a == $velocidadePermitida) {
        echo "Cuidado! <br>";
    } else {
        echo "Você foi multado! <br>";
    }

    //Velocidade no Limite
    if($b < $velocidadePermitida){
        echo "Você está na velocidade correta! 2 <br>";
    } else if ($b == $velocidadePermitida) {
        echo "Cuidado! 2<br>";
    } else {
        echo "Você foi multado! 2<br>";
    }


    // Velocidade acima do limite
    if($c < $velocidadePermitida){
        echo "Você está na velocidade correta! 3<br>";
    } else if ($c == $velocidadePermitida) {
        echo "Cuidado! 3<br>";
    } else {
        echo "Você foi multado! 3<br>";
    }
