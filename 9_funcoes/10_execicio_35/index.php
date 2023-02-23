<?php

    /*Exercicio 35:
    Crie uma função que receba um número;
    Retorno o valor deste número ao quadrado;
    */ 

    // Minha solução:
    function elevado($num){

        return $num ** 2;
    }

    echo elevado(4) . "<br>";
    echo elevado(16) . "<br>";
    echo elevado(2) . "<br>";
    echo elevado(5) . "<br>";

    // Solução do Professor:

    function numAoQuadrado($x) {

        $resultado = $x ** 2;

        return $resultado;
    }

    echo numAoQuadrado(2) . "<br>";

    $num = numAoQuadrado(4);

    echo $num . "<br>";

    $x = numAoQuadrado(123);

    echo $x . "<br>";