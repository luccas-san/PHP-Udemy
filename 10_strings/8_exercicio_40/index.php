<?php

    $str = "O rato roeu a roupa do Rei de Roma.";

    $quantidade = 0;
    $cont = 0;

    while($cont < strlen($str)){

        if($str[$cont] === "a"){

            $quantidade += 1;

        }

        $cont++;
    }

    echo "A frase: '$str' tem $quantidade letras 'A'. ";

