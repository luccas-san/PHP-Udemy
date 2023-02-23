<?php

    $a = 10;
    $b = 7;
    $c = 27;

    $soma = $a + $b + $c;
    $sub = $a - $b - $c;
    $multi = $a * $b * $c;
    $div = $a / $b / $c;

    $total = $soma * $sub / $multi + $div;

    echo "O resultado da soma é esse: $soma";
    echo "<br>";
    echo "O resultado da subtração é esse: $sub";
    echo "<br>";
    echo "O resultado da multiplicação é esse: $multi";
    echo "<br>";
    echo "O resultado da divisão é esse: $div";
    echo "<br>";
    echo "Aqui está o total: $total";
    echo "<br>";
    
    $e = 10;
    $f = 5;
    $g = 9;

    $operacao = ($f - $g) / $e * $g;

    echo $operacao;