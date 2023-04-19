<?php

/*24-Escreva um script PHP que receba um array de números e retorne a média aritmética dos valores.*/

$num = array(2, 3, 5, 7, 8 ,9);
$soma = 0;

foreach ($num as $num_k => $num_v) {
    $soma += $num_v;
    $num_k = $num_k + 1;
}
echo "A média aritmética dos valores da array é: ".($soma/$num_k);


