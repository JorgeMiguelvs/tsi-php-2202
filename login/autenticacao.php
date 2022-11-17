<?php
//Buscamos o código que conecta no SGBD
require_once '../bancoDeDados/connect.php';

$email = trim($_POST['usuario']);//trim() tira espaços do começo e do final
$senha = trim($_POST['senha']);

$stmt = $bd->prepare("  SELECT 
                            nome, senha
                        FROM 
                            usuarios
                        WHERE
                            email = :email ");

$stmt->bindParam(':email', $email);

$stmt->execute();

$usuario = $stmt->fetch(PDO::FETCH_ASSOC); //pega a 1 linha da consulta realizada

$autenticou = false;


if( isset($usuario['nome']) ){ //se exibir usuario 
      //compara a senha para ver se está correta
    if(password_verify($senha,$usuario['senha']))
    var_dump($usuario['senha']);
    var_dump($usuario);
    {
        $autenticou = true;
        session_start();
        $_SESSION['id'] = $email;

        //direciona para o menu
        header('Location: /tsi-php-2202/menu/menuTemplate.php');

        
    }
}

include 'index.php';