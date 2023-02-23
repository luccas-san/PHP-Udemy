<?php

    // Classe:
    class Carro {

        // Propriedades:
        public $cor;
        public $tetoSolar;
        public $velocidadeMaxima;

        // Métodos:
        function setVelocidadeMaxima($vel){
            $this->velocidadeMaxima = $vel;
        }

        function getVelocidadeMaxima(){
            echo "A velocidade máxima deste carro é: $this->velocidadeMaxima km/h <br>";
        }
    }

    // Chamando e adicinando a Classe
    $bmw = new Carro;

    // Usando Propriedades:
    $bmw->cor = "Branca";
    $bmw->tetoSolar = true;

    // Usando Métodos:
    $bmw->setVelocidadeMaxima(200);

    $bmw->getVelocidadeMaxima();