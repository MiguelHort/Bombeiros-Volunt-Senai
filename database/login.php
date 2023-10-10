<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

include("conexao.php");

$user_equipe = mysqli_real_escape_string($conexao, trim($_POST['equipe']));
$user_password = trim($_POST['password']);

// Preparar a consulta SQL usando uma declaração preparada
$sql = "SELECT * FROM equipe_atendimento WHERE equipe = ?";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("s", $user_equipe);
$stmt->execute();
$stmt->store_result();
$count = $stmt->num_rows;

if ($count == 1) {
    // Obter a senha hash do banco de dados
    $stmt->bind_result($id, $equipe, $senha);
    $stmt->fetch();

    // Verificar a senha usando password_verify()
    if (password_verify($user_password, $senha)) {
        $_SESSION['usuario_id'] = $id;
        $_SESSION['usuario_equipe'] = $equipe;
        header('Location: ../pages/ocorrencia.html');
        exit;
    } else {
        $_SESSION['login_invalido'] = true;
        header('Location: ../index.html');
        exit;
    }
} else {
    $_SESSION['login_invalido'] = true;
    header('Location: ../index.html');
    exit;
}

$stmt->close();
$conexao->close();
?>
