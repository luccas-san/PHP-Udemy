<?php

    // Minha solução:

    $frase = "Este item está em ";

    echo $frase . strtoupper("promocao");
    echo "<br>";

    // Solução do Professor:

    $str = "este item está em ";
    $promo = "promocao";

    echo ucfirst($str) . strtoupper($promo);