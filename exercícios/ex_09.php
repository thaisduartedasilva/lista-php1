<?php

function analisarNumero ($numero){
    if ($numero % 2 == 0){
        $parImpar = "Par.";

    }else{
        $parImpar  = "Impar";

    }

    $primo = "Primo";

    if($numero <= 1){
        $primo = "Não é primo";
    }else{
        for($i = 2; $i < $numero; $i++){
            if($numero % $i == 0){
                $primo = "Não é primo";
                break;
            }
        }
    }

    $soma = 0;

    for($i = 1; $i < $numero; $i++){
        if($numero % $i == 0){
            $soma += $i;
        }
    }

    if($soma == $numero){
        $perfeito = "Perfeito";
    }else{
        $perfeito = "Não é perfeito";
    }

     return "Número: " . $numero .
           "<br>Par ou ímpar: " . $parImpar  .
           "<br>Primo: " . $primo .
           "<br>Perfeito: " . $perfeito;
    
}



echo analisarNumero(33);

?>