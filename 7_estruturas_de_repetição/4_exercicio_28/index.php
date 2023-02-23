<?php


    // Minha solução:
    $x = 0;

    while($x < 31){

        if($x >= 4 && $x < 31){

            echo "$x" . "<br>";

            if($x === 24){
                break;
            }
        }
        $x = $x + 2;
    }


    // Solução do Professor:

    $y = 4;
    $limite = 30;

    while($y < $limite){

        echo "Executando o loop $x <br>";

        if($x === 24){
            echo "Parando o loop";
            break;
        }

        $x += 2;
    }