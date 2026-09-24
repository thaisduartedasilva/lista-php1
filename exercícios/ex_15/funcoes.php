<?php

//Calcular IMC;

function calcular_IMC ($peso, $altura){
    return $peso/ ($altura**2);
}

//Validar e-mail;

function validar_email ($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        return "Email válido";
    }else{
        return "Email inválido";
    }
}

//Gerar senha aleatória;

function gerarSenha($tamanho) {
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*";

    $senha = "";

    for ($i = 0; $i < $tamanho; $i++) {
        $indice = rand(0, strlen($caracteres) - 1);
        $senha .= $caracteres[$indice];
    }

    return $senha;
}

//Contar vogais;

function contar_vogais($texto){
    $vogais = 0;

    $texto = strtolower($texto);

    for($i = 0; $i < strlen($texto); $i++){

        $letra = $texto[$i];

        if($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u"){
            $vogais++;
        }
    }

    return $vogais; 
}

//Inverter texto;

function inverter_texto($texto){
    $caracteres = preg_split('//u', $texto, -1, PREG_SPLIT_NO_EMPTY); 
        
    $caracteresInvertidos = array_reverse($caracteres); 
    
    $textoInvertido = implode('', $caracteresInvertidos); 
    
    return $textoInvertido;
}

//Calcular idade;

function calcular_idade($ano){
    return 2026 - $ano;

}

//Converter moeda;

function converter_moeda($valor, $cotacao){
    return $valor*$cotacao;
}

//Formatar telefone;

function formatar_telefone($telefone) { 
    $telefone = preg_replace('/[^0-9]/', '', $telefone); 
    
    if (strlen($telefone) == 11) { 
        return "(" . substr($telefone, 0, 2) . ") " 
        . substr($telefone, 2, 5) . "-" 
        . substr($telefone, 7, 4); 
    } 
    
    return $telefone; 
}

//Gerar saudação conforme o horário;

function gerar_saudacao($hora){
    if($hora<12){
        return "Bom dia!";

    }elseif($hora<18){
        return "Boa tarde!";

    }else{
        return "Boa noite!";
    }
}

//Validar uma senha forte.

function validar_senha_forte($senha) { 
    if (strlen($senha) < 8) { 
        return false; 
    } 
    
    if (!preg_match('/[A-Z]/', $senha)) { 
        return false; 
    } 
    
    if (!preg_match('/[0-9]/', $senha)) { 
        return false; 
    } 
    
    return true;
}

?>