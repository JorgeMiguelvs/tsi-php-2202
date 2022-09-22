<?php

$dsn = 'mysql:dbname=senac;host=localhost';
$user='root';
$passoword='';

$bd= new pdo($dsn,$user,$passoword);

var_dump($bd);

?>