<?php

    function velociadadeMaxima($vel) {

       if (is_int($vel)){
        echo "O carro atinge a velocidade máxima de $vel km/h <br>";
       } else {
        echo "Por favor, passe um número inteiro";
       }

    }

    velociadadeMaxima(200);
    velociadadeMaxima(300);
    velociadadeMaxima(400);

    // Não podemos executar parâmetros de Funções que exigem parâmetros dentro dos "()"
    // Não pode:
    // VelocidadeMaxima();

    echo "Teste continuando <br>";

    //Podemos utilizar valores de variaveis:
    $velocidade = 125;

    velociadadeMaxima($velocidade);

    // O PHP ignora o parâmetro desnecessário:
    velociadadeMaxima(250, "teste");

    // Mais parâmetros:
    function descreverAnimal($nome, $raca){

        echo "O $nome é da raça $raca <br>";
    }

    descreverAnimal("Bob", "Vira lata");
    descreverAnimal("Shark", "Pastor Alemão");
    descreverAnimal("Poodle", "Tita");

    // Poucos argumentos dentro dos parâmetros geram FATALERROR:
    //descreverAnimal("Poodle");
