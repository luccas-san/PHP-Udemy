<?php

    // Ordenação do array associativo em ordem crescente dos dados:
    $arr = [
        'Lucas' => 29,
        'Pedro' => 18,
        'Joaquim' => 14,
        'Maria' => 12
    ];

    asort($arr);

    print_r($arr);
    echo "<br>";

    // Ordenação do array associativo em ordem decrescente dos dados:
    $arr2 = [
        'Lucas' => 29,
        'Pedro' => 18,
        'Joaquim' => 14,
        'Maria' => 12
    ];

    arsort($arr2);

    print_r($arr2);
    echo "<br>";

    // Ordenação do array por ordem das chaves (ordem alfabética):
    ksort($arr2);

    print_r($arr2);
    echo "<br>";

    // Ordenação inversa do array por ordem das chaves (ordem alfabética inversa):
    krsort($arr2);

    print_r($arr2);
    echo "<br>";
