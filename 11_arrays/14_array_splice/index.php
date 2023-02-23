<?php

    // Resgatar elementos de array
    // Remover elementos

    $arr = [1, 2, 3, 4, 5, 6];

    $removidos = array_splice($arr, 1, 2); // Remoção do conteúdo do array é informado por índice.

    print_r($arr); // Mostrando os que sobraram 
    echo "<br>";

    print_r($removidos); // Mostrando os que foram removidos
    echo "<br>";

    $arr2 = [1, 2, 3, 4, 5, 6];

    $removidos2 = array_splice($arr2, 3); // Remoção do conteúdo do array é informado por índice.
    
    print_r($arr2); // Mostrando os que sobraram 
    echo "<br>";

    print_r($removidos2); // Mostrando os que foram removidos
    echo "<br>";

    $arr3 = [1, 2, 3, 4, 5, 6];

    $removidos3 = array_splice($arr3, 1, -1); // Remoção do conteúdo do array é informado por índice.
    
    print_r($arr3); // Mostrando os que sobraram 
    echo "<br>";

    print_r($removidos3); // Mostrando os que foram removidos
    echo "<br>";