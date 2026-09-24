<?php

    include("funcoes.php");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos práticos das funções</title>
</head>
<body>

<h1>Exemplos das Funções</h1>

<h2>1- Calcular IMC:</h2>

<?php

echo "O IMC é: " . calcular_IMC(60, 1.55);

?>
<br>
<h2>2- Validar E-mail:</h2>

<?php

echo validar_email("thais@sesi.com");

?>

<br>
<h2>3- Gerar senha aleatória:</h2>

<?php

echo gerarSenha(10);

?>

<br>
<h2>4- Contar vogais:</h2>

<?php

echo contar_vogais("Bom dia Ícaro");

?>

<br>
<h2>5- Inverter texto:</h2>

<?php

echo inverter_texto("stray kids");

?>

<br>
<h2>6- Calcular idade:</h2>

<?php

echo calcular_idade(1909);

?>

<br>
<h2>7- Converter moeda:</h2>

<?php

echo converter_moeda(500, 5.19);

?>

<br>
<h2>8- Formatar telefone:</h2>

<?php

echo formatar_telefone(47991658283);

?>

<br>
<h2>9- Gerar saudação conforme o horário:</h2>

<?php

echo gerar_saudacao(8);

?>

<br>
<h2>10- Validar uma senha forte:</h2>

<?php

if (validar_senha_forte("SenhaMuitoForte876")){
    echo "Sua senha é forte!";
    
}else{
    echo "Sua senha é fraca!";
}

?>

    
</body>
</html>