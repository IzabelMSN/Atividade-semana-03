<?php

/*21-Crie um script PHP que receba um array de números e retorne o elemento que aparece com mais frequência no array.
Se houver mais de um elemento com a mesma frequência, retorne o primeiro que encontrar.*/

$array = [1, 2, 3, 1, 9, 39, 1, 23, 39, 1];
$frequencia = [];
$maior = 0;
foreach ($array as $array_k => $array_v) {
    if (isset($frequencia[$array_v])) {
        $frequencia[$array_v]++;
    }else{
        $frequencia[$array_v] = 1;
    }
    if ($frequencia[$array_v] > $maior) {
            $maior = $frequencia[$array_v];

            $maior++;
       }
}

echo "O número => ".$array_v."\n"."Apareceu => ".$maior;

/* ERRADA - usa função pronta
$array = [39, 1, 2, 3, 6, 9, 39, 1, 6,  23, 39];

$frequencia = array_count_values($array);

foreach ($frequencia as $frequencia_k => $frequencia_v) {
    echo "Número => ".$frequencia_k." Frequência: ".$frequencia_v."\n";
}
*/