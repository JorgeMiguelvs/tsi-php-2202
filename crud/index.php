<?php
//buscando o codigo q nos conecta no banco de dados
require_once '../bancoDeDados/connect.php';
require_once '../controleDeSessao/controle.php';

//faz a busca no banco
$stmt = $bd->query('SELECT id,nome,turno,inicio from alunos');


 
//cria um vetor p receber os registros 
$alunos = [];

//mostra na tela os cmpos do sql / fetch assoc tras o indice alfa numerico
while ($registro = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
    //o array recebe os dados sql
    $alunos[] = $registro;
}
//inclui um arquivo dentro de outro


include 'view/listar.php';

?>







