<?php
function gerarSenha($tamanho) {
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*";

    $senha = "";

    for ($i = 0; $i < $tamanho; $i++) {
        $indice = rand(0, strlen($caracteres) - 1);
        $senha .= $caracteres[$indice];
    }

    return $senha;
}

echo "Senha: " . gerarSenha(10);
?>