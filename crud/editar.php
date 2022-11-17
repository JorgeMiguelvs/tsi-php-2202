<?php
//buscando o codigo q nos conecta no banco de dados
require_once '../bancoDeDados/connect.php';
require_once '../controleDeSessao/controle.php';

$id = $_POST['id'] ?? 0;


$stmt = $bd->prepare('SELECT id,nome,turno,inicio
                    FROM alunos
                        WHERE id = :id');

$stmt->bindParam(':id',$id);
$stmt->execute();
$aluno = $stmt->fetch(PDO::FETCH_ASSOC);

var_dump($aluno);


//MOSTRAR UM FORM EM HTML E CCS PRARA O USER  e ao clicar em gravar mostrar msms de erro ou acerto



/*$id=$_POST['id'];
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];


$objConsulta=$bd->prepare("UPDATE  alunos  SET (nome,turno,inicio)
                           VALUES ('{nome}','{turno}','{inicio}')
                           WHERE id = $id");

if($objConsulta->execute()){
    $gravou = true;
} else{
    $gravou = false;
}

include 'index.php';*/