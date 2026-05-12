<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadasto de ADM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>Cadastro de ADM</h1>
    <form action="cadastrar.php" method="post">
        <label>Nome Usuario: </label>
        <input type="text" name="nome_usuario">
        <br><br>
        <label>E-mail: </label>
        <input type="text" name="email">
        <br><br>
        <label>CPF: </label>
        <input type="text" name="cpf">
        <br><br>
        <label>Telefone: </label>
        <input type="text" name="telefone">
        <br><br>
        <label>Senha: </label>
        <input type="password" name="Senha">
        <br><br>
        <button type="submit">Salvar</button>
        <button type="reset">Limpar</button>


    </form>
    
</body>
</html>