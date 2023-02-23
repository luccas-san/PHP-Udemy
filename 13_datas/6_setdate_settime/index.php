<?php

    $data = new DateTime();

    // setDate:
    echo "setDate: <br>";
    echo "<br>";
    print_r($data);
    echo "<br>";

    $data->setDate(1995, 2, 06); // Ano, Mês e Dia

    print_r($data);
    echo "<br>";
    echo "<br>";

    // setTime:
    echo "setTime: <br>";
    echo "<br>";
    $data->setTime(05, 12, 10); // Hora, Minuto, Segundo

    print_r($data);
    echo "<br>";

    echo $data->format('d/m/y') . "<br>";