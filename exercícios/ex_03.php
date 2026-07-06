<?php
function mascararCPF($cpf){
    $ultimos4 = substr($cpf, -4);
    $mascara = str_repeat("*", strlen($cpf) - 4);

    return $mascara . $ultimos4;
}

echo mascararCPF(3478454556);

?>