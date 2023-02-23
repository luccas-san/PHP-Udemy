<?php

    $a = 12;
    $b = 89;
    $c = "Lucas";
   
    if(is_int($a) || is_float($a)){

        $multi = $a * 2;

        if($multi > 100){

            echo "O número é maior do que 100 <br>";
        } else {

            echo "O número não é maior do que 100 <br>";
        }
    } else {

        echo "Não é um número <br>";
    }


    if(is_int($b) || is_float($b)){

        $multi = $b * 2;

        if($multi > 100){

            echo "O número é maior do que 100 <br>";
        } else {

            echo "O número não é maior do que 100 <br>";
        }
    } else {

        echo "Não é um número <br>";
    }
    

    if(is_int($c) || is_float($c)){

        $multi1 = $c * 2;

        if($multi1 > 100){

            echo "O número é maior do que 100 <br>";
        } else {

            echo "O número não é maior que 100 <br>";
        }
    } else {

        echo "Não é um número! <br>";
    }
    
    