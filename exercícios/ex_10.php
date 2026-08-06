<?php

function calcularMedia($notas){

    $maior = max($notas);
    $menor = min($notas);
    $soma = array_sum ($notas);
    $media = $soma / count($notas);

    if ($media >= 7){
        $situacao_f = "Aprovado!";

    }elseif ($media <= 6 && $media >= 4){
        $situacao_f = "Recuperação!";

    }else{
        $situacao_f = "Reprovado!";
    }

    return "Maior nota: " .$maior.
           "<br>Menor nota: " .$menor.
           "<br>Média: " .$media.
           "<br>Situação: " .$situacao_f;
}

$notas = [8, 6, 9, 7];

echo calcularMedia($notas);

?>