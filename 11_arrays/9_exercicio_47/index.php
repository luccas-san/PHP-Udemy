<?php

    $carro = ["Jaguar", 3.0, "Azul", 18, "Teto solar", "Automatico"];

    list($modelo, $motor, $cor, $aro, $acessorio, $cambio) = $carro;

    echo $modelo . "<br>";
    echo $motor . "<br>";
    echo $cor . "<br>";
    echo $aro . "<br>";
    echo $acessorio . "<br>";
    echo $cambio . "<br>";

    print_r($carro);