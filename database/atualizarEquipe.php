<?php
include('../database/conexao.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['equipe_id']) && isset($_POST['novo_nome']) && isset($_POST['nova_senha'])) {
    $equipeId = mysqli_real_escape_string($conexao, $_POST['equipe_id']);
    $novoNome = mysqli_real_escape_string($conexao, $_POST['novo_nome']);
    $novaSenha = mysqli_real_escape_string($conexao, $_POST['nova_senha']);
    $sql = "UPDATE equipe_atendimento SET equipe = '$novoNome', senha = '$novaSenha' WHERE id_equipe_atendimento = '$equipeId'";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        header('Location: ../pages/admin.php'); //Redirecione de volta à página original
       
        exit();
    } else {
        echo "Erro ao atualizar a equipe.";
    }
}
?>
