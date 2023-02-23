<?php

    $lucas = [
        'nome' => 'Lucas',
        'idade' => 27,
        'profissao' => 'Desenvolvedor'
    ];

    $ana = [
        'nome' => 'Ana Rita',
        'idade' => 23,
        'profissao' => 'Professora'
    ];

    foreach($lucas as $carac => $valor){

        echo "$carac: $valor <br>";

    }

    foreach($ana as $carac => $valor){

        echo "$carac: $valor <br>";
        
    }