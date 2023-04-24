<?php

/*20-Crie um script PHP que receba um array de números e encontre o maior e o menor valor presente no array. 
Exiba os valores encontrados na tela.-*/

/*OTIMIZADO */

$num = array(2, 4, 7, 18, 20, 26, 34, 45);

$maior = $num[0];
$menor = $num[0];

for ($i= 1; $i < count($num); $i++) { 
    if ($maior < $num[$i]) {
        $maior =  $num[$i];
    }
    if ($menor > $num[$i]) {
        $menor =  $num[$i];
    }
}

echo "O maior número => ".$maior." e o menor número => ".$menor; 
