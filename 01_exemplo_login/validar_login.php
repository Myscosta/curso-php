<?php

$email = $_POST ['email'];
$senha = $_POST ['senha'];

if ($email == "adm@senac.com.br" && $senha == "123456"){
    header("location: tela_administrativa.php");
}else{
    header("location: formulario.php? mensagem=Usuario ou Senha invalida");
}

?>