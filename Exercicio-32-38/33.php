<?php
/*33-Crie duas funções chamadas filtrar_pares e filtrar_impares que recebam um array de números 
e retornem um novo array contendo apenas os números pares e ímpares, respectivamente.
Use loops e estruturas de controle para resolver este problema.*/

$array = [1, 3, 5, 4, 2, 9, 8, 7, 12, 23, 34, 39, 42, 55, 67, 83, 90, 123, 124, 145];
$arrayPar = [];
$arrayImpar = [];
  
function filtrar_pares($array){
    foreach ($array as $key => $value) {
        if($value % 2 == 0){
            $arrayPar[] = $value;        
        }
    }
    foreach ($arrayPar as $key => $value) {
        echo $value." ";
    }
}   
echo "Array de números pares"."\n";
print_r(filtrar_pares($array));
echo "\n";


function filtrar_impares($array){
    foreach ($array as $key => $value) {
        if($value % 2 != 0){
            $arrayPar[] = $value;        
        }
    }
    foreach ($arrayPar as $key => $value) {
        echo $value." ";
    }
}   

echo "Array de números ímpares"."\n";
print_r(filtrar_impares($array));