<?php

    //Minha solução:

    function data($nome, $idade) {

        echo "Olá, eu sou o $nome e tenho $idade anos. <br>";

    }

    echo data("Lucas", 27);

    // Solução do Professor:

    function apresentarPessoa($n, $ida, $genero){

        echo "Olá, eu sou $genero $n e tenho $ida anos <br>";

    }

    apresentarPessoa("Matheus", 29, "o");
    apresentarPessoa("Alexia", 29, "a");
