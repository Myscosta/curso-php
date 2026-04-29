<?php
$idades = [12, 14, 18, 20, 25, 30, 35, 40, 45, 50];

//echo $idades[count($idades) - 1]; // Acessa o último elemento do array
//echo end($idades); // Outra forma de acessar o último elemento do array

$idadesFiltradas = array_filter($idades, function($idade) {
    return $idade >= 18; // Filtra apenas as idades maiores ou iguais a 18
});
var_dump($idadesFiltradas); // Exibe as idades filtradas