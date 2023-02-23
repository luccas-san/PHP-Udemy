<?php


    $cincoDias = strtotime("5 days");

    echo $cincoDias . "<br>";

    $dataAtualMais5 = date('d/m/y', $cincoDias);

    echo $dataAtualMais5 . "<br>";

    $doismeses = strtotime("2 months");

    echo $doismeses . "<br>";

    $dataAtualMaisDoisMeses = date('d/m/Y', $doismeses);

    echo $dataAtualMaisDoisMeses . "<br>";

    $dozeanos = strtotime("12 years");

    echo date('d/m/Y', $dozeanos) . "<br>"; 

