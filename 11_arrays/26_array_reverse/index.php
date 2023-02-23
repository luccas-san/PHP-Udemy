<?php

    $arr = [1, 2, 3, 4, 5];

    $arrRev = array_reverse($arr);

    print_r($arr); // Impressão do array sem mudança
    echo "<br>";
    print_r($arrRev); // Impressão do array com mudança
    echo "<br>";

    $arr2 = ["Matheus", 12, true, [1, 2]];

    $arr2Rev = array_reverse($arr2);

    print_r($arr2Rev);
