<?php

    $items = "carro-navio-helicoptero-barco-jangada";

    $itemsArray = explode("-", $items);

    print_r($itemsArray);
    echo "<br>";

    for($i = 0; $i < count($itemsArray); $i++){

        echo ucwords($itemsArray[$i]) . "<br>";

    }

