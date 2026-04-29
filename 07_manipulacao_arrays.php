<?php

$infoEmpresa = [
    'nome' => 'Senac Americana',
    'funcionarios' => 'paulo  Santos',
    'anoAtual' => 2026,
];

$infoCursos = [
    'cursos' => ['PHP','JS', 'Vue.js', 'Laravel'],
    'totalCursos' => 26, 
];
echo'<pre>';




var_dump(array_values($infoCursos));
echo '<hr>';
// o array_values() retorna um array com os valores do array original, ou seja, os dados associados às chaves. No exemplo acima, ele retornará um array contendo os valores 'Senac Americana', 'paulo  Santos' e '2026' para o array $infoEmpresa.
var_dump(array_keys($infoEmpresa));
echo '<hr>';
// o array_keys() retorna um array com as chaves do array original, ou seja, os índices associativos ou numéricos. No exemplo acima, ele retornará um array contendo as chaves 'nome', 'funcionarios' e 'anoAtual' para o array $infoEmpresa.
var_dump(count($infoEmpresa));
echo '<hr>';
// o count() é uma função que retorna o número de elementos em um array. No exemplo acima, ele retornará o valor 3 para o array $infoEmpresa, pois há três pares chave-valor nesse array.


$infoEmpresa = array_merge($infoEmpresa, $infoCursos);
print_r($infoEmpresa);

//o array_merge() é uma função que combina os elementos de um ou mais arrays em um único array. No exemplo acima, ele irá combinar os elementos do array $infoEmpresa e do array $infoCursos em um novo array. O resultado será um array que contém todas as chaves e valores de ambos os arrays, com as chaves do segundo array ($infoCursos) sobrescrevendo as chaves do primeiro array ($infoEmpresa) caso haja chaves iguais. O resultado final será um array que inclui as informações da empresa e os cursos oferecidos.
?>