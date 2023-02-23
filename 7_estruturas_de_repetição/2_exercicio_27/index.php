<?php

    $arr = [7, "Lucas", true, false, "Deus", 12.8, "Teste", true, [], "Palavra", 5, 10, "Opa"];

    $x = count($arr);
    $y = 0;

    while($y < $x){

        if(is_string($arr[$y])) {
            echo $arr[$y] . "<br>";
        }

        $y++;
    }