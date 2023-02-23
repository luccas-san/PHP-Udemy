<?php

    function parOuImpar($num){

        if ($num % 2 == 0){
            echo "Esse número $num é par! <br>";
        } else {
            echo "Esse número $num é impar! <br>";
        }
    }

    parOuImpar(30);
    parOuImpar(31);
    parOuImpar(22);
    parOuImpar(11);
    