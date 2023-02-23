<?php

    $arr = [
        [1, 2, 3],
        [2, 4, 6]
    ];

    print_r($arr);
    echo "<br>";

    echo $arr[0][1] . "<br>"; // Acessando primeiro array, e segundo elemento
    echo $arr[1][2] . "<br>"; // Acessando o segundo array, e ultimo elemento

    echo count($arr) . "<br>"; // Contagem da quantidade dentro do array principal
    echo count($arr[0]) . "<br>"; // Contagem da quantidade dentro do array que está dentro do principal