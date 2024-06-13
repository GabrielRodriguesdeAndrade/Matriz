<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Seven+</title>
</head>
<body>
    <h2>Cadastro Seven+<h2>
    
    <form method="post" action="validacao-dados.php">
        <label>Nome:</label><br>
        <input type="text" name="nome" id="nome" required><br>
        <label>email:</label><br>
        <input type="email" name="email" id="email" required><br>
        <label>Senha:</label><br>
        <input type="password" name="senha" id="senha" required><br>
        <label>Confirmação senha:</label><br>
        <input type="password" name="senhaC" id="senhaC" required><br><br>
        <input type="submit" onclick="return validarSenha()" value="Avançar">
<body>
    <script src="js/validar-senha.js" language="JavaScript" type="text/JavaScript" charset="utf-8"></script>
    
</html>Crie um sistema em etapas usando formulario de HTML com PHP;
 
    1º etapa
        Captura os seguintes dados:
            Nome, email, senha
            porem a senha com confirmação logo os dois campos deve conter a mesma senha;
    2º etapa
        Captura os dados bancario do cartão de credito:
            nome do cartao, numero, codigo de validação, mes e ano de vencimento, cpf, plano selecionado
    3º etapa
        Perfil do usuario master capitura os seguinte:
            Estilo de categorias que o usuario gosta para criar uma lista de opções no futuro, nome do perfil
    4º etapa
        Com todos os dados acima organiza em uma matriz multidimensional
 
    5ª etapa
        imprime em uma tabela em HTML toda a matriz.