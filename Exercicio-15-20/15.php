<?php

/*15-Crie um script PHP que receba um array de números inteiros e retorne a soma de todos os números pares no array.*/

$numInteiro = array(1, 2, 3, 9, 10, 14, 23, 26, 37);

$somaPar = 0;

foreach ($numInteiro as $numInteiro_k) {
    if($numInteiro_k % 2 == 0){
        $somaPar += $numInteiro_k;
    }
}

echo $somaPar;