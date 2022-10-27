<?php
//buscando o codigo q nos conecta no banco de dados
require_once '../bancoDeDados/connect.php';

//pega o dado enviado pelo usuario

//?? retorna para o id 0 caso o susario tente entrar direto pelo link de excluir 
$id = $_POST['id'] ?? 0;
//expressão regular pesquisar
//filtra para apenas id(números) receber na variavel
$id = preg_replace( '/\D/','',$id);

if ($bd->exec("DELETE FROM alunos WHERE id = $id")) {
    
    $apagado = true;
}
else
{
    $apagado = false;
}


include 'index.php';

?>