<?php
$carrinho = [
    0 => 'Macarrão',
    1 => 'Feijão',
    2 => 'Arroz',
    3 => 'Batata',
];

echo '<pre>';

arsort($carrinho);
var_dump($carrinho);
// o arsort() é uma função que ordena um array em ordem decrescente, mantendo a associação entre as chaves e os valores. No exemplo acima, ele irá ordenar o array $carrinho em ordem decrescente com base nos valores dos elementos, ou seja, do maior para o menor. Após a execução do arsort(), o array $carrinho conterá os elementos ordenados de acordo com seus valores, mas as chaves associativas permanecerão inalteradas.

echo '<hr>';

asort ($carrinho);
var_dump($carrinho);

echo '<hr>';

sort($carrinho);
var_dump($carrinho);
