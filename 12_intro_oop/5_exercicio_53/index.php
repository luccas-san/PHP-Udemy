<?php

    class Cachorro {

        function latir() {
            echo "Au! Au! <br>";
        }

        function andar($m) {
            echo "O cachorro andou $m metros <br>";
        }
    }

    $viraLata = new Cachorro;
    $viraLata -> latir();
    $viraLata -> andar(100);
    
    $pastorAlemao = new Cachorro;
    $pastorAlemao -> latir();
    $pastorAlemao -> andar(150);