<?php
$nome = $_POST['nome_paciente'];
$telefone = $_POST['telefone_paciente'];
$cidade = $_POST['cidade_paciente'];
$estado = $_POST['estado_paciente'];

$arquivo = fopen("paciente_db.txt" , 'a');
fwrite ($arquivo, "$nome \t $telefone \t $cidade \t $estado \n");
fclose($arquivo);

header ('location: paciente_formulario.php');

?>