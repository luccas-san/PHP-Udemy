<?php

    // Classe:
    class Humano {

        // Propriedades em Constantes:
        // Constantes são declaradas sem o "$"
        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;

        // Métodos em Constantes:
        function mostrarConstantes() {
            // Usar a palavra reservada self
            echo self::BRACOS . "<br>";
        }

    }

    $lucas = new Humano;

    // É necessario usar os "::" para chamar as constantes. Não precisa usar setas
    echo $lucas::OLHOS . "<br>";

