<?php
/*27-Crie um script PHP que gere um array com os primeiros N números pares, onde N é fornecido pelo usuário.*/

$array = [];

$Q = readline("Quantos números quer digitar: ");
   
for ($i=1; $i <= $Q ; $i++) { 
    $N = readline("Digite alguns números: ");
    if($N % 2 == 0){
        $arrayAleat[] = $N;
    }
}

foreach ($arrayAleat as $key => $value) {   
    echo $value." ";
}