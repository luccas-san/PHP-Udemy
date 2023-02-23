<?php

    // Classe:
    class Car {
        // Propriedade:
        public $rodas = 4;
        private $vidro = "Sem película";
        protected $portas = 4;

        public function peliculaDeFabrica($pelicula) {
            $this->vidro = $pelicula;
        }

        public function getVidro() {
            return $this->vidro;
        }

        public function getPortas() {
            return $this->portas;
        }

    }

    // Classe
    class Mecanico {
        // Método
        public function alterarRodas($carro) {
            $carro->rodas = 10;
        }

        public function colocarPelicula($carro, $pelicula){
            $carro->vidro = $pelicula;
        }
    }

    $carro = new Car;

    echo $carro->rodas . "<br>";

    $lucas = new Mecanico;

    $lucas->alterarRodas($carro);

    echo $carro->rodas . "<br>";

    echo $carro->getVidro() . "<br>";

    echo $carro->getPortas() . "<br>";

