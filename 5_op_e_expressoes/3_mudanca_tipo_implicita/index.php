<?php

    echo 5 / 2;
    echo "<br>";
    
    if(is_float(5 / 2)){
        echo "É float! <br>";
    }

    echo 2 . 3;
    echo "<br>";

    if(is_string(2 . 3)){
        echo "É string <br>";
    }

    $nome = "Lucas";
    $sobrenome = "Santos";

    $nomeCompleto = $nome. " " . $sobrenome;

    echo $nomeCompleto;
    echo "<br>";