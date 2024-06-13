<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nmCartao = $_POST['nmCartao'];
$nrCartao = $_POST['nrCartao'];
$cdValidacao = $_POST['cdValidacao'];
$mesAnoCartao = $_POST['mesAnoCartao'];
$cpf = $_POST['cpf'];
$plano = $_POST['plano'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <h2>Validação dados<h2>
    
    <form method="post" action="matriz-dados.php">
        <label>Selecione as categorias de sua preferência</label><br>
        <input type="checkbox" id="terror" name="terror" value="terror">
        <label for="terror">Terror</label><br>
        <input type="checkbox" id="aventura" name="aventura" value="aventura">
        <label for="aventura">Aventura</label><br>
        <input type="checkbox" id="comedia" name="comedia" value="comedia">
        <label for="comedia">Comédia</label><br>
        <input type="checkbox" id="romance" name="romance" value="romance">
        <label for="romance">Romance</label><br>
        <input type="checkbox" id="drama" name="drama" value="drama">
        <label for="drama">Drama</label><br>
        <input type="checkbox" id="ficcao" name="ficcao" value="ficcao">
        <label for="ficcao">Ficção</label><br>
        <input type="hidden" name="nome" id="nome" value="<?=$nome?>">
        <input type="hidden" name="email" id="email" value="<?=$email?>">
        <input type="hidden" name="senha" id="senha" value="<?=$senha?>">
        <input type="hidden" name="nmCartao" id="nmCartao" value="<?=$nmCartao?>">
        <input type="hidden" name="nrCartao" id="nrCartao" value="<?=$nrCartao?>">
        <input type="hidden" name="cdValidacao" id="cdValidacao" value="<?=$cdValidacao?>">
        <input type="hidden" name="mesAnoCartao" id="mesAnoCartao" value="<?=$mesAnoCartao?>">
        <input type="hidden" name="cpf" id="cpf" value="<?=$cpf?>">
        <input type="hidden" name="plano" id="plano" value="<?=$plano?>">
        <input type="submit" value="Avançar">
    </form>
    
</body>
</html>