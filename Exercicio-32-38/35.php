<?php
/*35-Crie uma função chamada remover_duplicadas que recebe um array de números
e retorna um novo array com os números duplicados removidos. 
Use loops,estruturas de controle e arrays associativos para resolver este problema.*/

$array = array(56, 73, 61, 43, 24, 95, 85, 53, 61, 73, 56, 24);

function remover_duplicadas($array){
    $arrayC = count($array);
    $arrayFinal = array();

    for ($i=0; $i < $arrayC; $i++) { 
        $arrayFinal[$array[$i]] = $array[$i];
    }

    foreach ($arrayFinal as $key => $value) {
        echo $value." ";
    }
}

print_r(remover_duplicadas($array));