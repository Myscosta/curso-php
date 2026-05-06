<?php
function escrever($texto){
    echo "{$texto} <br>";
}
escrever('Luffy');
escrever('Toph');

//essa diferente da outra, exige que tenha texto dentro (").

echo '<hr>';

function soma($n1,$n2){
    return $n1 + $n2;
}
echo soma(22, 16);

// essa vc usa para operaçãoes matematicas.
echo '<hr>';

function conta($n1, $n2, $taxa = 2){
    return ($n1 + $n2) * $taxa;
}
echo conta(1,5);
echo '<hr>';

function media( $nota1, $nota2, $nota3, $nota4 ){
    return ($nota1 + $nota2 + $nota3 + $nota4) / 4;
}
echo media(7, 5, 8, 9);
?>