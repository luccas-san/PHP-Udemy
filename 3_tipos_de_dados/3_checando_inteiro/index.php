<?php

    if(is_int(5)) {//True
        echo "É um inteiro <br>";
    }

    if(is_int("Não é um inteiro!")){//false
        echo "Não é um inteiro <br>";
    }

    $a = 10;

    if(is_int($a)){
        echo "É um inteiro <br>";
    }

?>