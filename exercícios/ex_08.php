<?php

function ordenarNomes($nomes){

    $lista = explode(",", $nomes);

    $lista = array_map("trim", $lista);

    sort($lista);

    return $lista;
}

$nomes_usuario = "Thais, Serenna, Henrique, Annie, Brenda";

echo "Lista original: $nomes_usuario <br>";

$lista_ordenada = ordenarNomes($nomes_usuario);

echo "Lista organizada: <br>";

foreach ($lista_ordenada as $usuario){
    echo "$usuario <br>";
}

?>