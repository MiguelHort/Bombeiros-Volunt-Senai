<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'root');
define('DB', 'if0_35105772_ocorrencias');
 
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

?>