<?php

    /*Exercicio 37
    - Crie uma função chamada defineCorCarro;
    - Onde há um parâmetro chamado cor, com valor default de vermelho;
    - Retorne a cor do carro;
    - Imprima o retorno tanto com parâmentro default, como também definido a cor;
    */

    //Solução:
    function defineCorCarro($cor = "Vermelho") {

        return "A cor do carro é: $cor";

    }

    $carroVermelho = defineCorCarro();
    echo $carroVermelho . "<br>";

    $carroAzul = defineCorCarro("Azul");
    echo $carroAzul . "<br>";