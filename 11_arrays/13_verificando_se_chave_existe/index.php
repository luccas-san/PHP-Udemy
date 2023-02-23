<?php

    $arr = [
        'nome' => 'Lucas',
        'idade' => 27
    ];

    echo array_key_exists("nome", $arr) ? "A chave existe! <br>" : "A chave não existe! <br>";

    echo array_key_exists("profissao", $arr) ? "A chave existe! <br>" : "A chave não existe! <br>";

    echo isset($arr['nome']) ? "A chave existe! ISSET <br>" : "A chave não existe! ISSET <br>";

    echo isset($arr['teste']) ? "A chave existe! ISSET <br>" : "A chave não existe! ISSET <br>";

    $x = 10;

    echo isset($x) ? "A var existe! ISSET <br>" : "A var não existe! ISSET <br>";

