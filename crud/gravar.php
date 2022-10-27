<?php
//buscando o codigo q nos conecta no sgbd

require_once '../bancoDeDados/connect.php';
//include_once não gera erro se não existir


//dados do form
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];


$objConsulta=$bd->prepare('INSERT INTO alunos (nome,turno,inicio)
                           VALUES (:nome,:turno,:inicio) ');



/* a funcção bindParam retorna outra variavel (objeto),
essa outra variavel junta os dados do usuário com a consulta 
do sql

A função consulta subtitui os rotulos (ex..:'nome') 
pelos dados inseguros
*/

$objConsulta->bindParam('nome',$nome);
$objConsulta->bindParam('turno',$turno);
$objConsulta->bindParam('inicio',$inicio);


if($objConsulta->execute()){
    $gravou = true;
} else{
    $gravou = false;
}

include 'index.php';

//EXECUTA A CONSULTA NO SGBD