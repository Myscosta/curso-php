<?php
$nomes = ['João', 'Rita', 'Claudio', 'Fernanda'];

echo '<hr>' ; 
// essas são as 3 fazes do For (inicialização '$i', condição '$i < count'; incremento '$i' ou o uso do decremento '$i--')
for ($i = 0; $i < count($nomes); $i++) {
    echo $nomes[$i] . '<br>';
}
echo '<hr>';

// EXEMPLO MENOS COMUM POREM ULTILIZADO " decremento".
for ($i = 10; $i>0; $i--) {
    echo "{$i} <br>";
}
echo '<hr>';

for ($i = 0; $i<10; $i++) {
    echo "{$i} <br>";
}
echo '<hr>';
?>