<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Eventos</title>
</head>
<body>
    <h1>Cadastro de Eventos</h1>
    <form action="eventos_salvar.php" method = "post">
        <label>Nome</label>
        <input type="text" name ="nome_evento">
        <br><br>
        <label>Tipo</label> 
        <select name = "tipo_evento">
             <option value="cha">Chá de bebe</option>
             <option value="Casamento">Casamento</option>
             <option value="show">Show</option>
        </select>
        <br><br>
        <label>Data</label>
        <input type="date" name = "data_evento">
        <br><br>
        <label>Descrição</label>
        <input type="text" name = "descricao_evento">
        <br><br>
        <button type = "submit">Salvar</button>
        <button type = "reset">Limpar</button>
    </form>


    <hr>
    <h2>Listagem de eventos</h2>
    <?php
    $arquivo = fopen("eventos_db.txt", "r");
    while(!feof($arquivo)){
        $linha =fgets($arquivo);
        echo "$linha <br>";
    }
     fclose($arquivo);
    ?>
   

</body>
</html>