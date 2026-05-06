<?php
$name = 'Senac Americana - Cursos de TI';
echo strtoupper($name);
// estamos definindo uma variavel,  e o uso do "strtoupper" exibe ela em caixa alta, (maiuscula).
echo '<hr>';


echo strtolower($name);
//  o uso do "strtolower" deixa com que todas as letras fiquem minusculas.
echo'<hr>';


echo ucfirst(strtolower($name));
//O uso do "ucfirst" deixa somente a primeira letra Maiuscula.
echo'<hr>';


echo ucwords(strtolower($name));
// O uso do "ucwords" deixa todas as letras inicias da frase em maiuscula.
echo '<hr>';


$estado = 'São Paulo/SP';
$arrayEstado = explode('/', $estado);
echo "<pre>";
var_dump($arrayEstado);
// o "explode" divide o array em partes onde tiver "/". 
// exemplo se vc criar um array $cor[azul marinho] no comum esse array teria apenas uma posição.
// porem com o explode se vc colocar "/" entre os nomes [azul/marinho] ele gera uma nova posição "indice".
echo'<hr>';


$info = 'São Paulo/ SP/ Brasil/ Terra';
$arrayInfo = explode("/",$info);
var_dump($arrayInfo);
// o uso da "/" divide os arrays.
echo '<hr>';


$nome = ' Senac Americana ';
var_dump($nome);
var_dump(ltrim($nome));
var_dump(rtrim($nome));
var_dump(trim($nome));
// o "ltrim " retira o espaço do lado esquerdo.
// já o "rtrim" retira o espaço do lado direito.
// o "trim" retira todos os espaços de ambos os lados.

echo '<hr>';

$empresa = 'Senac Jaú';
echo "$empresa <br>";
$novaEmpresa = str_replace('Jaú', 'Americana', $empresa);
echo "$novaEmpresa <br>";
// "str_replace" esse substitue partes de um uma string, nesse caso ele substituiu apenas "jaú". a ordem é (palavra a ser substituida, nova palavra, variavel).
echo substr($novaEmpresa, 0, 4) . "<br>";
// o "substr"  mostra apenas a letras de acordo com sua posição.
echo strlen($novaEmpresa);
// o "strlen" conta a quantidade de caracteres exibidos incluindo os espaços.

echo'<hr>';


$nome = 'Carlos Ferreira';
if (isset($nome)){
    echo $nome;
}else{
    echo 'Não existe!';
}
// o uso do "isset" não permite que outra variavel seja exibida no lugar de uma ja declarada, caso vc coloque uma variavel que nao existe ele retorna flaso.
//ela serve para validar se a variavel existe.

echo '<hr>';

unset($nome);
if(isset($nome)){
    echo $nome;
}else{
    echo 'Não existe!';
}
// o uso do "unset" remove a varivael, ele "mata" a variavel.

echo '<hr>';

date_default_timezone_set('America/Sao_Paulo');
// é usado pra definir fuso horario.
echo 'O ano atual: ' . date('Y') . '<br>';
echo 'O mês atual: ' . date('m') . '<br>';
echo 'O dia atual: ' . date('d') . '<br>';
echo 'a data atual: ' . date('d/m/Y') . '<br>';
echo 'Hora atual: ' . date('H:i:s') . '<br>';
// exibe as informações de data, dia, mês, ano e hora em tempo real.
// observação o "Y" maiusculo mostra o ano em 4 digitos e ele minusculo apenas 2 digitos.





