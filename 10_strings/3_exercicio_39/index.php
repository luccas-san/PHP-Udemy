<?php

    
    $carro = [
        'Porta' => 100,
        'Maçaneta' => 5,
        'Motor' => 2000,
        'Retrovisor' => 8
    ];

    function itensCaros($carro) {

        $arrItensCaros = [];

        foreach($carro as $item => $preco){

            if($preco > 10) {

                array_push($arrItensCaros, $item);

            }
        }

        return $arrItensCaros;

    }

    $novoArr = itensCaros($carro);

    print_r($novoArr);