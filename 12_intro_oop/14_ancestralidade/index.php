<?php

    class Humano {

    }

    class Animal {

    }

    class Professor extends Humano {

    }

    $marcos = new Humano;

    $faisca = new Animal;

    if($marcos instanceof Humano) {
        echo "Marcos é um Humano <br>";
    } else {
        echo "Marcos não é um Humano <br>";
    }

    if($faisca instanceof Humano) {
        echo "Faisca é um Humano <br>";
    } else {
        echo "Faisca não é um Humano <br>";
    }

    $pedro = new Professor;

    if($pedro instanceof Professor) {
        echo "Pedro é um Professor <br>";
    } else {
        echo "Pedro não é um Professor <br>";
    }

    if($pedro instanceof Humano) {
        echo "Pedro é um Humano <br>";
    } else {
        echo "Pedro não é um Humano <br>";
    }

