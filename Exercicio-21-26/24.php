<?php

/*25-Crie um script PHP que gere um array com N números aleatórios entre X e Y (inclusive), 
onde N, X e Y são fornecidos pelo usuário.*/

$arrayAleat = [];

$N = readline("Qual a quantidade de números que tu quer randomizar: ");
$Xmenor = readline("Que número quer começar: ");
$Ymaior = readline("E qual número quer terminar: ");

for ($i=1; $i <= $N ; $i++) { 
    $arrayAleat[] = rand($Xmenor , $Ymaior);
}

foreach ($arrayAleat as $key => $value) {
    echo $value."\n";
}