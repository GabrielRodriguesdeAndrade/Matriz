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
$terror = $_POST['terror'];
$aventura = $_POST['aventura'];
$romance = $_POST['romance'];
$drama = $_POST['drama'];
$comedia = $_POST['comedia'];
$ficcao = $_POST['ficcao'];



$dados = [
    'dadosIniciais' => [
        'nome' =>[$nome],
        'email' =>[$email],
        'senha' =>[$senha]
    ],
    'validacaoDados' =>[
        'nomeCartao' =>[$nmCartao],
        'numeroCartao' =>[$nrCartao],
        'codigoValidacao' =>[$cdValidacao],
        'vencimentoCartao' =>[$mesAnoCartao],
        'cpf' =>[$cpf],
        'plano' =>[$plano],
    ],
    'perfil' =>[
        'terror' =>[$terror],
        'aventura' =>[$aventura],
        'romance' =>[$romance],
        'drama' =>[$drama],
        'comedia' =>[$comedia],
        'ficcao' =>[$ficcao],
    ]
]
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Dados Iniciais</h2>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
        </tr>
        <tr>
            <?php foreach ($dados['dadosIniciais'] as $valor): ?>
                <td><?= $valor[0] ?></td>
            <?php endforeach; ?>
        </tr>
    </table>

    <h2>Validação de Dados</h2>
    <table border="1">
        <tr>
            <th>Nome do Cartão</th>
            <th>Número do Cartão</th>
            <th>Código de Validação</th>
            <th>Vencimento do Cartão</th>
            <th>CPF</th>
            <th>Plano</th>
        </tr>
        <tr>
            <?php foreach ($dados['validacaoDados'] as $valor): ?>
                <td><?= $valor[0] ?></td>
            <?php endforeach; ?>
        </tr>
    </table>

    <h2>Perfil</h2>
    <table border="1">
        <tr>
            <th>Terror</th>
            <th>Aventura</th>
            <th>Romance</th>
            <th>Drama</th>
            <th>Comédia</th>
            <th>Ficção</th>
        </tr>
        <tr>
            <?php foreach ($dados['perfil'] as $valor): ?>
                <td><?= $valor[0] ?></td>
            <?php endforeach; ?>
        </tr>
    </table>
</body>
</html>


