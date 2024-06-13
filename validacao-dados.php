<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação dados</title>
</head>
<body>
    <h2>Validação dados<h2>
    
    <form method="post" action="perfil.php">
        <label>Nome que está no cartão</label><br>
        <input type="text" name="nmCartao" id="nmCartao" required><br>
        <label>Número cartão:</label><br>
        <input type="number" name="nrCartao" id="nrCartao" required><br>
        <label>Codigo validação:</label><br>
        <input type="number" name="cdValidacao" id="cdValidacao" required><br>
        <label>Mês e ano de vencimento</label><br>
        <input type="text" name="mesAnoCartao" id="mesAnoCartao" required><br>
        <label>Cpf</label><br>
        <input type="number" name="cpf" id="cpf" required><br>
        <label>Qual o plano escolhido</label><br>
        <input type="radio" name="plano" id="plano" value="premium" checked> Premium Plus<br>
        <input type="radio" name="plano" id="plano" value="plus">Plus<br>
        <input type="radio" name="plano" id="plano" value="basico">Basico<br>
        <input type="hidden" name="nome" id="nome" value="<?=$nome?>">
        <input type="hidden" name="email" id="email" value="<?=$email?>">
        <input type="hidden" name="senha" id="senha" value="<?=$senha?>">
        <input type="submit" value="Avançar">
<body>
</html>