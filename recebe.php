<?php

echo 'olá, '.$_POST["nomeUsuario"].'
,sua idade é '.$_POST["idadeUsuario"]. '
,  seu CPF é: '.$_POST["cpfUsuario"]. '
, e o perido escolhido foi: '.$_POST["periodoUsuario"];

$nome= $_POST['nomeUsuario'];
$idade= $_POST['idadeUsuario'];
$cpf= $_POST['cpfUsuario'];
$periodo= $_POST['periodoUsuario'];

$arquivo = fopen('alunos.csv','a');//abro o arquivo append
fwrite($arquivo,"$nome,$idade,$cpf,$periodo\r\n");
fclose($arquivo);

?>