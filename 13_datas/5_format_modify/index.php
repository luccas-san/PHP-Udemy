<?php

    $data = new DateTime();

    // Format:
    echo "Format: <br>";
    echo $data->format('d/m/y') . "<br>";

    echo $data->format('D - M - Y') . "<br>";

    echo $data->format('l . F . Y') . "<br>";
    echo "<br>";

    // Modify:
    echo "Modify: <br>";
    $data->modify('+5 day');

    echo $data->format('d/m/y') . "<br>";

    $data->modify('+2 month');

    echo $data->format('d/m/y') . "<br>";

    $data->modify('-3 years');

    echo $data->format('d/m/y') . "<br>";