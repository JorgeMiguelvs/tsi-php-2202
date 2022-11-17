<?php
//chama o controle de sessão
require '../controleDeSessao/controle.php';
//destroi a sessão
session_destroy();
//redireciona para o login
header('Location:/tsi-php-2202/login');