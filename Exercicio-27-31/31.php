<?php
/*31-Crie um script PHP que receba uma matriz (array bidimensional) e calcule a soma de todos os seus elementos.*/

$matriz = array(
   array(2, 7, 9),
   array(4, 5, 8),
   array(1, 8, 3) 
);


$soma = 0;

for ($i=0; $i < count($matriz) ; $i++) { 
    for ($j=0; $j < count($matriz[0]); $j++) { 
        $soma += $matriz[$i][$j];
    }
}

echo "A soma de todos os elementos é => ".$soma;