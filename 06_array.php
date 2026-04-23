<?php
//$carros = ['Uno','Fusca','Cronos','Jeep','Civic','Tera','Pulse','FastBack'];
//echo  $carros[2];
//echo '<br>';
//echo $carros[7];

//$carroUm = ['Uno', 'Fiat','Branco'];
//echo $carroUm[2];

$carroUm = [
    'modelo' => 'Cornos',
    'marca' => 'Fiat',
    'Cor' => 'Branco'
];
echo $carroUm ['modelo'];
echo '<br>';
echo $carroUm ['marca'];
echo '<br>';
echo $carroUm ['Cor'];
echo '<br>';
echo '<br>';

$aluno = [
    'codigo' => 199,
    'nome' => 'Erica',
    'idade' => 29,
    'cidade' => 'Americana',
    'uf' => 'São Paulo',
    'cor_cabelo' => 'Castanho',
    'altura' => 157,
    'numero_calcado' => 36
];
 
echo $aluno['nome'];
echo'<br>';
echo $aluno['altura'];
echo'<br>';
echo $aluno['numero_calcado'];
echo'<br>';
echo $aluno['uf'];
echo'<br>';
?>
