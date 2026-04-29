<?php
echo '<pre>';
$carrinho = ['Arroz', 'Sabão', 'Feijão', 'Balinhas'];
var_dump($carrinho);

echo '<hr>';

//array_pop($carrinho);
//var_dump($carrinho);
// o array_pop() é uma função que remove o último elemento de um array e retorna esse elemento. No exemplo acima, ele irá remover o último item do array $carrinho, que é 'Balinhas', e retornará esse valor. Após a execução do array_pop(), o array $carrinho conterá apenas os elementos 'Arroz', 'Sabão' e 'Feijão'.
// '<hr>';

//array_shift($carrinho);
//var_dump($carrinho);
// o array_shift() é uma função que remove o primeiro elemento de um array e retorna esse elemento. No exemplo acima, ele irá remover o primeiro item do array $carrinho, que é 'Arroz', e retornará esse valor. Após a execução do array_shift(), o array $carrinho conterá apenas os elementos 'Sabão' e 'Feijão'.
//echo '<hr>';

//unset($carrinho[0]);
//var_dump($carrinho);
// o unset() é uma função que destrói a variável especificada. No exemplo acima, ele irá remover o elemento do array $carrinho que está no índice 0, que é 'Arroz'. Após a execução do unset($carrinho[0]), o array $carrinho conterá apenas os elementos 'Sabão' e 'Feijão', mas o índice 0 estará vazio ou não definido.
//echo '<hr>';

//array_push($carrinho, 'Tapete');
//array_push($carrinho, 'Rodo');
//var_dump($carrinho);
// o array_push() é uma função que adiciona um ou mais elementos ao final de um array. No exemplo acima, ele irá adicionar os elementos 'Tapete' e 'Rodo' ao final do array $carrinho. Após a execução do array_push(), o array $carrinho conterá os elementos 'Arroz', 'Sabão', 'Feijão', 'Balinhas', 'Tapete' e 'Rodo'.


//array_unshift($carrinho, 'Microondas');
//array_unshift($carrinho, 'Tapete');
//var_dump($carrinho);
// o array_unshift() é uma função que adiciona um ou mais elementos ao início de um array. No exemplo acima, ele irá adicionar os elementos 'Microondas' e 'Tapete' ao início do array $carrinho. Após a execução do array_unshift(), o array $carrinho conterá os elementos 'Microondas', 'Tapete', 'Arroz', 'Sabão', 'Feijão' e 'Balinhas'.


//$carrinho = array_unique($carrinho);
//var_dump($carrinho);
// o array_unique() é uma função que remove os valores duplicados de um array. No exemplo acima, ele irá verificar o array $carrinho e remover quaisquer elementos que sejam duplicados, mantendo apenas a primeira ocorrência de cada valor. Após a execução do array_unique(), o array $carrinho conterá apenas os valores únicos, sem repetições.
