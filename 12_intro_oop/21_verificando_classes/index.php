<?php

    // Classe:
    class Humano {

        // Propriedades:
        public $idade;
        public $nome;
        public $profissao;

        // Métodos:
        public function falar() {}

        public function andar() {}
    }

    // Verficação de classes
    if(class_exists("Humano")) {
        echo "A classe existe! <br>";
    }

    // Verifica as propriedades de uma classe
    print_r(get_class_vars("Humano"));

    // Verifica os métodos de uma classe
    print_r(get_class_methods("Humano"));