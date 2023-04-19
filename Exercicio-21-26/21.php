<?php

/*21-Crie um script PHP que receba um array de números e retorne o elemento que aparece com mais frequência no array.
Se houver mais de um elemento com a mesma frequência, retorne o primeiro que encontrar.*/

$array = [39, 1, 2, 3, 6, 9, 39, 1, 6,  23, 39];

$frequencia = array_count_values($array);

foreach ($frequencia as $frequencia_k => $frequencia_v) {
    echo "Número => ".$frequencia_k." Frequência: ".$frequencia_v."\n";
}
