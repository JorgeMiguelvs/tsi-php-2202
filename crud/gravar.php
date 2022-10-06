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


/*
A variavel objConsulta receba uma preparação 
para juntar os dados do user com o sql 
*/

$objConsulta->bindParam('nome',$nome);
$objConsulta->bindParam('turno',$turno);
$objConsulta->bindParam('inicio',$inicio);


/*
A variavel consulta subtitui os rotulos (ex..:'nome') 
pelos dados inseguros
*/



if($objConsulta->execute()){
    echo "foi ";
} else{
    echo "n foi ";
}

//EXECUTA A CONSULTA NO SGBD