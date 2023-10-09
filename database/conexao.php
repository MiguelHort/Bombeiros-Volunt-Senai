<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
define('HOST', 'sql310.infinityfree.com');
define('USUARIO', 'if0_35105772');
define('SENHA', '4mgQ0lECgAW9oVT');
define('DB', 'if0_35105772_ocorrencias');
 
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

?>