<?php

/*16-Escreva um script PHP que inverta a ordem dos elementos de um array sem usar funções nativas do PHP.*/

$numOrdem = array("Arroz", "Lentilha", "Milho", "Cebola", "Batata");
$arrayInvertida = array();
  
for ($i=(count($numOrdem) - 1); $i >= 0 ; $i--) { 
    $arrayInvertida[] = $numOrdem[$i];
}

var_dump($arrayInvertida);

/*INCORRETO 
$numOrdem = array("Arroz", "Lentilha", "Milho", "Cebola", "Batata");
$tamanhoArray = sizeof($numOrdem);

for ($i=$tamanhoArray-1; $i>=0 ; $i--) { 
    echo $numOrdem[$i]."\n";
}
*/