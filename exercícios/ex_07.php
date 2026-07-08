<?php

function calcularDesconto($valor){

    if ($valor <= 100.00){
        return "Você não reseberá desconto, o valor da sua compra é " . $valor ;

    }elseif ($valor > 100.00 && $valor <= 500.00){
        $desconto10 = ($valor-($valor*0.10));
        return "O seu desconto é de 10%. O valor da sua compra é de " . $valor . ". Com o desconto fica: " . $desconto10;

    }elseif ($valor > 500.00 && $valor <=1000.00){
        $desconto20 = ($valor-($valor*0.20));
        return "O seu desconto é de 20%. O valor da sua compra é de " . $valor . ". Com o desconto fica: " . $desconto20;

    }else{
        $desconto30 = ($valor-($valor*0.30));
        return "O seu desconto é de 30%. O valor da sua compra é de " . $valor . ". Com o desconto fica: " . $desconto30;
    }
}
echo calcularDesconto(50000);

?>