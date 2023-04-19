<?php

/*17-Escreva um script PHP que receba uma string e retorne um array associativo onde 
as chaves são os caracteres da string e os valores são o número de ocorrências de cada caractere.*/
 
/*OUTRA TENTATIVA - Funcionou
isset = Função nativa que serve para saber se uma variavel esta definida.
is set -> "isso é definido" - tradução*/

$string = 'Palavra';

function resultado($string){
    $string = str_replace(' ', ' ', $string);

    $caractere = str_split($string);

    $resultado = [];

    foreach ($caractere as $caractere_k) {
        if (!isset($resultado[$caractere_k])){
            $resultado[$caractere_k] = 1;
        }else {
            $resultado[$caractere_k] += 1;
        }
    }

    foreach($resultado as $caractere_k => $caractere_v){
        echo "Número de ocorrência do caractere: ".$caractere_k."Foi: ".$caractere_v."\n";
    }
}

resultado($string);


/* SOLUÇÃO EM ANDAMENTO - não funciona
$string = "Palavra";

$palavra = strlen($string);

for($i = 0; $i < $palavra; $i++){
    $caractere = $string[$i];

    echo "Número de ocorrência do caractere: $i"."Foi: $caractere\n";
}
*/


/* SOLUÇÃO CORRETA - porém usando função nativa
$string = "Palavra";

foreach (count_chars($string, 1) as $string_k => $string_v) {
    echo "Número de ocorrência do caractere: ".chr($string_k)."\n"."Foi: ".$string_v."\n";
}*/