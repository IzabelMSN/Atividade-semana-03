<?php
/*32-Escreva uma função chamada maior_menor que recebe um array de números e retorna um array associativo
contendo o maior e o menor número no array. Use estruturas de controle e loops para encontrar os valores.*/

$array = array(12, 34, 6, 4, 76, 87, 34, 23, 13, 9);

function maior_menor($array){
    $maior = $array[0];
    $menor = $array[0];
    $arrayFinal = array();

    for ($i= 1; $i < count($array); $i++) { 
        if ($maior < $array[$i]) {
            $maior =  $array[$i]; 
            $arrayFinal["Maior"] = $maior;
        }
        if ($menor > $array[$i]) {
            $menor =  $array[$i]; 
            $arrayFinal["Menor"] = $menor;    
        }
    } 
    
    foreach ($arrayFinal as $key => $value) {
        echo $key." ".$value."\n";
    }
}

print_r(maior_menor($array));

