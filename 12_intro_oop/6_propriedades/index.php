<?php

    class Car {

        // Pode-se inicializar as variaveis sem conter valores
        public $rodas;
        public $aro = 20;
        public $cor = "Vermelha";

        function ligar(){
            echo "Vrummmm <br>";
        }

    }

    $ferrari = new Car;
    echo $ferrari -> aro . "<br>";

    $ferrari -> rodas = 4;
    echo $ferrari -> rodas . "<br>";

    // Os valores padrão podem ser alterados:
    $ferrari -> cor = "Azul";
    echo $ferrari -> cor . "<br>";

    $ferrari -> ligar();