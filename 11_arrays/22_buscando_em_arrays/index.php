<?php

    $arr = ['banana', 'maça', 'batata', 'pêra', 'mamão'];

    echo in_array('batata', $arr) ? "Há batata no array <br>" : "Não há batata no array <br>";

    $b = 'banana';

    echo in_array($b, $arr) ? "Há banana no array <br>" : "Não há banana no array <br>";

    echo in_array("teste", $arr) ? "Há teste no array <br>" : "Não há teste no array <br>";