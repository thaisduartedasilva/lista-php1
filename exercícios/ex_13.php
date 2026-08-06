<?php

function criptografarMensagem($texto){

    $resultado = "";

    for($i = 0; $i < strlen($texto); $i++){

        $resultado .= chr(ord($texto[$i]) + 3);

    }

    return $resultado;
}

function descriptografarMensagem($texto){

    $resultado = "";

    for($i = 0; $i < strlen($texto); $i++){

        $resultado .= chr(ord($texto[$i]) - 3);

    }

    return $resultado;
}

$mensagem = "OLAAA";

$cripto = criptografarMensagem($mensagem);

echo "Mensagem original: " . $mensagem;
echo "<br>Criptografada: " . $cripto;
echo "<br>Descriptografada: " . descriptografarMensagem($cripto);

?>