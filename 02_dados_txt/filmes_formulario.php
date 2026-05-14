<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Cadastro de Album</h1>
    <form action="filmes_salvar.php" method ="post">
        <label> Artista: </label>
        <input type="text" name = "nome_artista">
        <br><br>
        <label> Nome Album: </label>
        <input type="text" name = "nome_album">
        <br><br>
        <label> Ano lançamento: </label>
        <input type="number" name = "ano_lancamento">
        <br><br>
        <button type = "submit">Salvar</button>
        <button type = "reset"> Limpar</button>

    </form>
</body>
</html>