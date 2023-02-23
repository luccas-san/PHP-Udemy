<?php

    class Cachorro {

        public $nome;
        public $raca;
        public $corDoPelo;

        function __construct($nome, $raca, $corDoPelo){

            $this->nome = $nome;
            $this->raca = $raca;
            $this->corDoPelo = $corDoPelo;
            
        }
    }

    $viraLata = new Cachorro("Faísca", "Vira-Lata", "Caramelo");

    echo "O cachorro se chama $viraLata->nome, é da raça $viraLata->raca. A cor do pelo é $viraLata->corDoPelo";

    