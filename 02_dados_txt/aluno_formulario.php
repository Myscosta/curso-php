<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno form</title>
</head>
<body>
     <h1>Cadastro Aluno:</h1>
 <form action="aluno_salvar.php" method = "post">
    <label>RA:</label>
    <input type="text" name= "ra_aluno">
    <br><br>
    <label>Nome:</label>
    <input type="text" name="nome_aluno">
    <br><br>
    <label>Idade:</label>
    <input type="number" name = "idade_aluno">
    <br><br>
    <button type = "submit">Salvar</button>
    <button type = "reset">Limpar</button>

    <hr>
    <h2>Listagem de Alunos</h2>
    <?php
    $arquivo = fopen("alunos_db.txt" , "r");
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
        echo "$linha <br>";
    }
    fclose($arquivo);
    ?>

</form>
</body>
</html>