<?php

session_start();

if (!isset($_SESSION['id'])) {
    
    header('Location:/tsi-php-2202/login');
    exit();
}
