<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Listar</title>
</head>
<body>

<a href="formIncluir.php"><button class="btn">Novo Aluno</button></a>

<?php 

//msm de erro ou succeso p cadastra o aluno


if (isset($gravou)) {
    if (!$gravou) {
        echo '"alerta" erro ao tentar gravar';
    }
    else
    {
        echo '"alerta" gravou com sucesso';
    }
}

if (isset($apagado)) {
    if (!$apagado) {
        echo '"alerta" erro ao tentar apagar';
    }
    else
    {
        echo '"alerta" apagado com sucesso';
    }
}



?>
          <form method='post'>
            <div class="container">
            <table  class="table">
            <thead>
                <td>ID</td>
                <td>nome</td>
                <td>tuno</td>
                <td>inicio</td>
                <td>Ações</td>
            </thead>
    
                <?php 
                    foreach ($alunos as $aluno) {
                        echo "
                            <tr>
                            <td>{$aluno['id']}</td>
                            <td>{$aluno['nome']}</td>
                            <td>{$aluno['turno']}</td>
                            <td>{$aluno['inicio']}</td>
                            <td>
                            <button class ='btn btn-danger' 
                            formaction='apagar.php' 
                            value ='{$aluno['id']}'
                            name='id'>Apagar
                            </button>
                            </td>

                            <td>
                            <button class ='btn btn-danger' 
                            formaction='Editar.php' 
                            value ='{$aluno['id']}'
                            name='id'>Editar
                            </button>
                            </td>

                            </tr>    
                            ";
                         }

                 ?>
            </table>
            </form>
    </div>
<a/body>
</html>