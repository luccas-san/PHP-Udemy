<?php
    $pessoa = ['Nome'=>'Lucas', 'idade'=>27, 'Sexo'=>'Masculino'];
    echo "</br>";
    print_r($pessoa);
    echo "</br>";
    if($pessoa['idade'] >= 18){
        echo "Essa pessoa é maior de idade";
    }
    echo "</br>";
?>