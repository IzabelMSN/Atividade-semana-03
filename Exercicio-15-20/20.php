<?php

/*20-Crie um script PHP que receba um array de números e encontre o maior e o menor valor presente no array. 
Exiba os valores encontrados na tela.-*/

/*SEM FUNÇÃO PRONTA*/

$num = array(2, 4, 7, 18, 20, 26, 34, 45);

$maior = $num[0];

for ($i= 1; $i < count($num); $i++) { 
    if ($maior < $num[$i]) {
        $maior =  $num[$i];
    }
}

echo "O maior número => ".$maior."\n"; 

$menor = $num[0];

for ($i= 1; $i < count($num); $i++) { 
    if ($menor > $num[$i]) {
        $menor =  $num[$i];
    }
}

echo "O menor número => ".$menor."\n";


/* COM FUNÇÃO PRONTA
$num = array(2, 4, 7, 18, 20, 26, 34, 45);

echo "O maior número => ".max($num)."\n";

echo "O menor número => ".min($num)."\n";
*/