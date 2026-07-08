<?php

function ordenarNomes($nomes){

    $lista = explode(",", $nomes);

    sort($lista);

    return implode(", ", $lista);
}

echo ordenarNomes("Thais, Serenna, Henrique, Annie, Brenda");

?>