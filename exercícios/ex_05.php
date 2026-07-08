<?php
function analisarTexto($texto){

    $palavras = str_word_count($texto);
    $caracteres = strlen($texto);

    $vogais = 0;
    $consoantes = 0;

    $texto = strtolower($texto);

    for($i = 0; $i < strlen($texto); $i++){

        $letra = $texto[$i];

        if($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u"){
            $vogais++;
        }
        elseif(ctype_alpha($letra)){
            $consoantes++;
        }
    }

    echo "Palavras: " . $palavras . "<br>";
    echo "Caracteres: " . $caracteres . "<br>";
    echo "Vogais: " . $vogais . "<br>";
    echo "Consoantes: " . $consoantes;
}

analisarTexto("socorro");
?>