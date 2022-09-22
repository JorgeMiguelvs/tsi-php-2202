<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    
    <title>Formulário</title>
</head>
<body><div class="formulario">
    
<form action="recebe.php" method="post">
    <label for="name">Nome:</label>
    <input type="text" name="nomeUsuario" id="nome">
    <br><br>
    <label for="number">Idade:</label>
    <input type="text" name="idadeUsuario" id="idade">
    <br><br>
    <label for="name">CPF:</label>
    <input type="number" name="cpfUsuario" id="cpf">
    <br><br>
    <select name="periodoUsuario" id="periodo">
        <option value="">Escolha</option>
        <option value="matutino">Matutino</option>
        <option value="vespertino">Vespertino</option>
        <option value="noturno">Noturno</option>
    <br><br>
    <input type="submit" value="Enviar">
<br>
    </form>
</div>

<?php

?>
</body>
</html>