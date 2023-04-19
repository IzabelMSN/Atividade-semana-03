<?php

/*23-Crie um script PHP que receba um número inteiro e verifique se ele é primo.
Um número primo é um número maior que 1 que só pode ser dividido por 1 e ele mesmo.*/

$num = readline("Digite um número: ");

for ($i=2; $i<$num ; $i++) { 
    if ($num % $i == 0) {
        echo $num." não é número primo pois, é múltiplo de: ".$i."\n";
        break;
    }else{
        echo $num." é um número primo.";
        break;
    }
}