<?php
/*29-Crie um script PHP que receba uma matriz quadrada (array bidimensional)
e calcule a soma dos elementos da diagonal principal. 
A diagonal principal de uma matriz quadrada é formada pelos elementos cujos índices de linha e coluna são iguais
por exemplo, [0][0], [1][1], [2][2], etc.).*/

$matrizQuadrada = array(
    array(2, 4, 6),
    array(3, 5, 7,),
    array(1, 8, 9)
);

$somaMQuadrada = 0;

for ($i=0; $i < count($matrizQuadrada) ; $i++) { 
    for ($j=0; $j < count($matrizQuadrada[0]); $j++) { 
        if ($i == $j) {
            $somaMQuadrada += $matrizQuadrada[$i][$j];
        }
    }
}

echo "O resultado da soma dos elementos da diagonal principal da  matriz quadrada é => ".$somaMQuadrada;