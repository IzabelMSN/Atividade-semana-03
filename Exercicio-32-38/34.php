<?php
/*34-Escreva uma função chamada media que recebe um array de números e retorna a média dos valores no array. 
Use loops e estruturas de controle para calcular a soma e o total de elementos no array.*/

$mediaArray = array(2, 5, 7, 9, 10, 13);

function media($mediaArray){
    $soma = 0;
    
    foreach ($mediaArray as $mediaArray_k => $mediaArray_v) {
        $soma += $mediaArray_v;
        $mediaArray_k = $mediaArray_k + 1;
    } 
    
    $media = $soma/$mediaArray_k;
    echo "A média dos valores da array é => ".$media."\n";

    echo "A soma dos valores da array é => ".$soma."\n";

    echo "O total de elementos na array é => ".$mediaArray_k."\n";
}


print_r(media($mediaArray));

