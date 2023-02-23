<?php

    $nomes = ["Lucas", "João", "Pedro", "Maria"];

    $a = 10;

    foreach($nomes as $nome){
        echo "O nome do índice atual é $nome <br>";
        if($nome == "Lucas"){
            echo "Opa $a <br>";
        }
    }
