<?php
/*37-Escreva uma função chamada fatorial que recebe um número inteiro não negativo e retorna o fatorial desse número. 
Use loops  para calcular o fatorial.*/

$numInt = 5;

function fatorial($numInt){
    $calc = 1;

    while ($numInt > 1) {
        $calc *= $numInt;
        $numInt--;
    }

    echo "O fatorial é ".$calc;
}

print_r(fatorial($numInt));

