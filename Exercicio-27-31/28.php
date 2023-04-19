<?php
/*28-Escreva um script PHP que receba duas strings e verifique se elas são anagramas. 
Duas strings são anagramas se elas contêm os mesmos caracteres, mas em uma ordem diferente.*/

$string1 = readline("Digite uma palavra: ");
$string2 = readline("Digite a segunda palavra: ");
$s = 0;

$letra1 = strlen($string1);
$letra2 = strlen($string2);

if ($letra1 == $letra2) {
     for ($i=0; $i < $letra1; $i++) { 
          for ($j=0; $j < $letra2; $j++) { 
               if ($string1[$i] == $string2[$j]) {
                    $s++;
                    break;
               }
          }
     }
     if ($s ==  $letra1){
          echo "As palavras ".$string1." e ".$string2." são um anagrama";
     }else {
          echo "As palavras ".$string1." e ".$string2." não são um anagrama";
     } 
}else{
     echo "As palavras ".$string1." e ".$string2." não são um anagrama";
}


/*FUNCIONA -- porem usa funcao nativa count_chars 
$string1 = readline("Digite uma palavra: ");
$string2 = readline("Digite a segunda palavra: ");

function anagrama($string1, $string2){
   if (count_chars($string1, 1) == count_chars($string2, 1)) {
        echo "As palavras ".$string1." e ".$string2." são um anagrama";
   }else {
    echo "As palavras ".$string1." e ".$string2." não são um anagrama";
    }
}

print_r(anagrama($string1, $string2));

*/