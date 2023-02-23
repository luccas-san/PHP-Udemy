<?php

    // Minha solução:

    $x = 10;

    while($x <= 100){

        if($x == 30 || $x == 40){

            echo "Valor do salto $x <br>";

            $x = $x + 10;

            continue;
        }
        echo "$x" . "<br>";

        $x = $x + 10;
    }

    // Solução do Professor:
    /* Professor anunciou erro de enunciado. Por isso a diferença em grande escala!*/
    
    $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

    $i = 0;

    while($i < count($arr)) {

        $numeroAtual = $arr[$i];

        if($numeroAtual == 30 || $numeroAtual == 40){
            $i++;
            continue;
        }

        echo "Elemento: $arr[$i] <br>";

        $i++;

    }