<?php

    $arrPrincipal = [
        [1, 2, 3, 4],
        [5, 6, 7, 8],
        [9, 10, 11, 12]
    ];


    for($i = 0; $i < count($arrPrincipal); $i++){

        echo "Imprimindo array: " .  ($i + 1) . "<br>";

        for($j = 0; $j < count($arrPrincipal[$i]); $j++){

            echo "Número: " . $arrPrincipal[$i][$j] . "<br>";
        }
    }