<?php
session_start();
include("conexao.php");

// Recebe os valores
$user_equipe = mysqli_real_escape_string($conexao, trim($_POST['equipe']));
$user_password = mysqli_real_escape_string($conexao, trim(md5($_POST['password'])));

// Valida o email
$sql = "select count(*) as total from equipe_atendimento where equipe = '$user_equipe'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

// Valida o usuario como já existente
if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: ../database/cadastro.html');
	exit;
}

// Insere os valores no banco
$sql = "INSERT INTO equipe_atendimento (equipe,senha) VALUES ('$user_equipe','$user_password')";

// Executa se for verdadeiro
if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
	$conexao->close();

	header('Location: ../index.html');
}


exit;
?>