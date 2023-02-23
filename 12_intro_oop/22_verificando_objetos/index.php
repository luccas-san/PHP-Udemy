<?php

    class Humano {

        public function falar() {
            echo "Olá! <br>";
        }
    }

    $matheus = new Humano;

    // Verfica se uma variável é um objeto
    if(is_object($matheus)) {
        echo "É um objeto! <br>";
    } else {
        echo "Não é um objeto! <br>";
    }

    // Retorna a Classe do Objeto
    echo get_class($matheus) . "<br>";

    // Verifica se o método existe dentro do Objeto
    if(method_exists($matheus, "falar")) {
        echo "Método existe! <br>";
    } else {
        echo "Método não existe! <br>";
    }