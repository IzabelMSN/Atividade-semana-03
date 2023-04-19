<?php

/*26-Escreva um script PHP que criptografe uma string, substituindo cada caractere pelo caractere 
localizado K posições à frente no alfabeto. O usuário deve fornecer a string e o valor de K.*/
$alfabeto = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 
'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

$string = readline("Digite uma palavra que queira criptografar: ");
$caractere = str_split($string);
$char = readline("Escolha a letra da palavra que queira criptografar: ");

$K = 1;

$K= readline("Escolha um K(número) para substituir =>  "."\n");

$i = array_search($char, $alfabeto); 

$palavra = $alfabeto[$i + $K];

$stringFinal = str_replace($char, $palavra, $string);

var_dump($stringFinal);

/* 
foreach ($caractere as $c => $cv) {
    $i = array_search($cv, $alfabeto);    
    array_push($stringFinal ,$alfabeto[$i + $K]);
}

var_dump($stringFinal);
*/