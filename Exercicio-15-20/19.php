<?php

/*19-Dado um array associativo que contém informações sobre várias pessoas (nome, idade e cidade), 
escreva um script PHP que filtre e exiba apenas as informações das pessoas com idade maior ou igual a 18 anos
e que residam na cidade especificada pelo usuário*/

$usuarioCidade = readline("Informe a cidade em que você vive: ");

$pessoas = array(
    "pessoas1" => [
        "nome" => "Leôncio",
        "idade" => 43,
        "cidade" => "São Paulo"
    ],

    "pessoas2" => [
        "nome" => "Verônica",
        "idade" => 27,
        "cidade" => "Porto Alegre"
    ],

    "pessoas3" => [
        "nome" => "Ashley",
        "idade" => 17,
        "cidade" => "Goiânia"
    ],

    "pessoas4" => [
        "nome" => "Louisie",
        "idade" => 16,
        "cidade" => "Porto Alegre"
    ],

    "pessoas5" => [
        "nome" => "Thomas",
        "idade" => 23,
        "cidade" => "Goiânia"
    ],

    "pessoas6" => [
        "nome" => "Paula",
        "idade" => 34,
        "cidade" => "Porto Alegre"
    ],
     
);


foreach ($pessoas as $pessoas_k => $pessoas_v) {
    foreach ($pessoas_v as $key => $value) {
        if ($pessoas_v["idade"] >= 18 && $pessoas_v["cidade"] == $usuarioCidade) {
            echo $key." = ".$value."\n"; 
        }
    }        
}

