<?php

    $items = ['batata', 'maça', 'pera', 'feijão', 'arroz'];

    $removidos = array_splice($items, 2, -1);

    print_r($items);
    echo "<br>";

    print_r($removidos);
    echo "<br>";