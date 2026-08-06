<?php

function estatisticas_numericas($numeros){

    $soma = array_sum($numeros);
    $media = $soma / count($numeros);
    $maior = max($numeros);
    $menor = min($numeros);

    $pares = 0;
    $impares = 0;

    for($i = 0; $i < count($numeros); $i++){

        if($numeros[$i] % 2 == 0){
            $pares++;
        }else{
            $impares++;
        }

    }

    return "Soma: " . $soma .
           "<br>Média: " . $media .
           "<br>Maior valor: " . $maior .
           "<br>Menor valor: " . $menor .
           "<br>Pares: " . $pares .
           "<br>Ímpares: " . $impares;

}

$numeros = [10,5,8,2,7];

echo estatisticas_numericas($numeros);

?>