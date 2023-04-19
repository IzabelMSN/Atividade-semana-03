<?php

/*18-Escreva um script PHP que gere a tabuada de um número de 1 a 10.
Utilize uma estrutura de repetição para gerar a tabuada e exiba o resultado na tela.*/

$tabuada = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

foreach($tabuada as $tabuada_k => $tabuada_v){
    for($count = 1; $count <=10; $count++){
        echo $tabuada_v." x ".$count." = ".($tabuada_v*$count)."\n"; 
    }
}