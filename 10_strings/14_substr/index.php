<?php

    $str = "Está é a minha string";

    $minha = substr($str, 10, 6); // String Pai, Indice inicial, comprimento da palavra

    echo $str . "<br>";
    echo $minha . "<br>";

    $str2 = "Testando esta string abc";

    $novaString = substr($str, 8); // Omitir comprimento = pegar até o fim

    echo $novaString . "<br>";

    $novaString2 = substr($str2, 8, -3); // Comprimento negativo = remover do ultimo indice

    echo $novaString2 . "<br>";