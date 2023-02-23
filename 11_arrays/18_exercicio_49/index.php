<?php

    $raca = "Vira-lata";
    $nome = "Faísca";
    $cor = "Caramelo";

    $cachorro = compact("raca", "nome", "cor");

    print_r($cachorro);
    echo "<br>";

    foreach($cachorro as $caracteristica => $dog){

        echo "$caracteristica: $dog <br>";

    }