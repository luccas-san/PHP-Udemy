<?php

    //Minha solução:

    $arr = [1, 2 , 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

    for($arr = 0; $arr <= 20; $arr++){

        if($arr % 2 == 0){
            echo $arr . "<br>";
        }

    }

    //Solução do Professor:
    /*Diferença da-se por conta das versões do PHP*/
    
    $ar = [1, 2 , 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

    for($i = 0; $i < count($ar); $i++){
        if($ar[$i] % 2 == 0) {
            echo "Número: $ar[$i] <br>";
        }
    }