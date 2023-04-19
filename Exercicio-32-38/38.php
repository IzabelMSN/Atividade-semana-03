<?php
/*38-Escreva uma função chamada fibonacci_n que recebe um 
número inteiro n e retorna um array com os primeiros n números da sequência de Fibonacci. 
Use loops e estruturas de controle para calcular os números da sequência.*/

$n = 10;

function fibonacci_n($n){
    $n1 = 0;
    $n2 = 1;

    $count = 0;

    while ($count < $n) {
        echo " ".$n1;
        $atual = $n2 + $n1;
        $n1 = $n2;
        $n2 = $atual;
        $count = $count + 1;
    }
}

print_r(fibonacci_n($n));