<?php

    $arr = [
        'cor' => 'amarelo',
        'forma' => 'retangular',
        'material' => 'aço'
    ];

    extract($arr);

    echo $cor . "<br>";
    echo $forma . "<br>";
    echo $material . "<br>";

    // Exemplo de Sobrescrição:

    $nome ='Matheus';

    $pessoa = [
        'nome' => 'Lucas',
        'idade' => 27
    ];

    echo $nome . "<br>";

    extract($pessoa);

    echo $nome . "<br>";
    echo $idade . "<br>";