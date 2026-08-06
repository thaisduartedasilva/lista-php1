<?php

function formatarTexto($texto){

    $maiusculas = strtoupper($texto);
    $minusculas = strtolower($texto);
    $primeirasMaiusculas = ucwords(strtolower($texto));
    $caracteres = strlen($texto);

    return "Maiúsculas: " .$maiusculas.
           "<br>Minúsculas: " .$minusculas.
           "<br>Primeira letra maiúscula: " .$primeirasMaiusculas.
           "<br>Quantidade de caracteres: " .$caracteres;
}

echo formatarTexto("Eu gostei do filme da A Odisseia");

?>