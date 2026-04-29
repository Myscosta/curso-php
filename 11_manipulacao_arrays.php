<?php
$nomes = ['Rubens', 'Senac', 'Americana',];
var_dump($nomes); // Exibe o array original
echo '<pre>';
$nomes[0] = strtoupper($nomes[0]);
$nomes[1] = strtoupper($nomes[1]);
$nomes[2] = strtoupper($nomes[2]);
var_dump($nomes); // Exibe o array com os nomes em maiúsculas


$nomes = array_map('transformaParaMaiusculo', $nomes); // Aplica a função de transformação a cada elemento do array

function transformaParaMaiusculo($valor)
 {
    return strtoupper($valor); // Converte o valor para maiúsculo
}
var_dump($nomes)    ; // Exibe o array com os nomes em maiúsculas
?>