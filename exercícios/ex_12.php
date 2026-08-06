<?php

function analisar_produtos($produto){
    
    $maior_preco = max($produto);
    $menor_preco = min($produto);
    $media = array_sum($produto) / count($produto);

    return  "Produto mais caro: " .$maior_preco.
            "<br>Produto mais barato: " .$menor_preco.
            "<br>Média dos preços: " .$media;
}

$produto = [
    "Arroz" => 25.50,
    "Feijão" => 10.00,
    "Carne" => 60.50,
    "Macarrão" => 4.80
];

echo analisar_produtos($produto);

?>