<?php
$ra = $_POST['ra_aluno'];
$nome = $_POST['nome_aluno'];
$idade = $_POST['idade_aluno'];

$arquivo = fopen("alunos_db.txt", "a");
fwrite($arquivo, "$ra \t $nome \t $idade \n");
fclose($arquivo);

header('location:aluno_formulario.php');

?>