<?php
/*36-Crie uma função chamada inverter_array que recebe um array e retorna um novo array com a ordem dos elementos invertida. Não use a função array_reverse embutida no PHP. 
Use loops e estruturas de controle para resolver este problema.*/

$array = array(2, 5, 8, 9, 3, 5, 1, 4, 5);
$novo = [];

function inverter_array($array){
  $tamanho = 0;

  foreach ($array as $array_k) {
    $tamanho++;
  }

  for ($i=($tamanho - 1); $i >= 0 ; $i--) { 
    $novo[] = $array[$i];
  }

  print_r($novo);
}

print_r(inverter_array($array));

/*INCORRETO 
$array = array(2, 5, 8, 9, 3, 5, 1);

function inverter_array($array){
    $inverteArray = sizeof($array);
    
    echo "Array invertida => ";
    
    for ($i=$inverteArray-1; $i>=0 ; $i--) {   
      echo  $array[$i]." ";
    }

}

print_r(inverter_array($array));
*/