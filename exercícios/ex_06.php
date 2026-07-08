<?php

function converterTemperatura($valor, $origem, $destino){

    if($origem == "C" && $destino == "F"){
        return ($valor * 9/5) + 32;
    }

    elseif($origem == "F" && $destino == "C"){
        return ($valor - 32) * 5/9;
    }

    elseif($origem == "C" && $destino == "K"){
        return $valor + 273.15;
    }

    elseif($origem == "K" && $destino == "C"){
        return $valor - 273.15;
    }

    elseif($origem == "F" && $destino == "K"){
        return (($valor - 32) * 5/9) + 273.15;
    }

    elseif($origem == "K" && $destino == "F"){
        return (($valor - 273.15) * 9/5) + 32;
    }

    elseif($origem == $destino){
        return $valor;
    }

    else{
        return "Escala inválida!";
    }
}

echo converterTemperatura(30, "C", "F");

?>