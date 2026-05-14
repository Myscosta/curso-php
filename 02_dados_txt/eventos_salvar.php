<?php
$nome = $_POST['nome_evento'];
$tipo = $_POST['tipo_evento'];
$data = $_POST['data_evento'];
$descricao = $_POST['descricao_evento'];

$arquivo = fopen("eventos_db.txt", "a");
fwrite($arquivo, "$nome \t $tipo \t $data \t $descricao \n");
fclose($arquivo);