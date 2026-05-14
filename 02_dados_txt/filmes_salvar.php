<?php
$artista = $_POST['nome_artista'];
$album = $_POST['nome_album'];
$ano = $_POST['ano_lancamento'];

$arquivo = fopen("filmes_db.txt", "a");
fwrite($arquivo, "$artista \t $ano \t $album \n");
fclose($arquivo);

?>