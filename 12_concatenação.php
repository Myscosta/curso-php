<?php
$var1 = 'João';
$var2 = 'da Silva';

//echo $var1 . ' ' . $var2 . ' '.12 // Concatenação usando o operador de ponto (.)

$var3 = $var1 . ' ' . $var2 . ' ' . 12; // Armazenando o resultado da concatenação em uma nova variável
echo $var3; // Exibindo o resultado da concatenação

$nome = 'Rubens Perreira';
$empresa = 'Senac Americana';

//echo'O '.$nome.' é fundador da empresa : '.$empresa.'.'; 
echo "O {$nome} é fundador da empresa: {$empresa}."; // Usando aspas duplas para interpolação de variáveis

?>


Operadores Aritméticos
+ soma
- subtrai
/ divide
* multiplica
% resto

Operadores Relacionais
> maior
< menor
>= maior igual
<= menor igual
== igual
!= diferente

Operadores lógicos
&& e
|| ou
!  não//