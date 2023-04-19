<?php
/*30-Escreva um script PHP que receba uma matriz (array bidimensional) e retorne a matriz transposta. 
A matriz transposta é obtida trocando-se linhas por colunas.*/

$matriz = array(
    array(2, 4, 6),
    array(1, 8, 9),
    array(3, 5, 7,)
);

function matrizTransposta($matriz){
    $final = array();
    foreach ($matriz as $matriz_k => $matriz_v) {
        foreach ($matriz_v as $key => $value) {
            $final[$key][$matriz_k] = $value;
        }
    }
    return $final;
}
echo "Matriz Normal => "."\n";
print_r($matriz);

echo "Matriz Transposta => "."\n";
print_r(matrizTransposta($matriz));

