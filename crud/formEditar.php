<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Formulário de Editar</title>
</head>
<body>
    <form action="editar.php" method="post">
    <input type="hidden" name="id">
    <label for="nome">Nome</label>
    <input type="text" name="nome">
    <br>
    <label for="turno">Turno</label>
    <select name="turno" id="turno">
    <option value="matutino">Matutino</option>
    <option value="vespertino">Vespertino</option>
    <option value="noturno">Noturno</option>
    </select>
    <label for="inicio">Inicio</label>
    <input type="date" name="inicio" id="inicio">
    <br><br>
    <input type="submit" value="Editar">
    </form>
</body>
</html>